<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PengajuanDokumen;
use App\Models\ActivityLog;
use App\Support\LayananSurat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class PengajuanSuratController extends Controller
{
    public function index()
    {
        $pengajuan = PengajuanSurat::where('user_id', Auth::id())
            ->with('dokumen')
            ->latest()
            ->get();

        return view('user.pengajuan.index', compact('pengajuan'));
    }

    public function cetak(PengajuanSurat $pengajuanSurat)
    {
        abort_unless($pengajuanSurat->user_id === Auth::id(), 403);
        abort_unless($pengajuanSurat->status === 'disetujui', 403);
        abort_unless(
            $pengajuanSurat->nomor_surat
            && $pengajuanSurat->nama_penanda_tangan
            && $pengajuanSurat->tanda_tangan_path,
            403
        );

        return view('user.pengajuan.cetak', [
            'pengajuan' => $pengajuanSurat->load('user'),
        ]);
    }

    public function signature(PengajuanSurat $pengajuanSurat)
    {
        $user = Auth::user();
        $canAccess = $user->role === 'admin' || $pengajuanSurat->user_id === $user->id;

        abort_unless($canAccess && $pengajuanSurat->status === 'disetujui', 403);
        abort_unless(
            $pengajuanSurat->tanda_tangan_path
            && Storage::disk('public')->exists($pengajuanSurat->tanda_tangan_path),
            404
        );

        return response()->file(Storage::disk('public')->path($pengajuanSurat->tanda_tangan_path), [
            'Cache-Control' => 'private, max-age=300',
        ]);
    }

    public function create()
    {
        $profile = Auth::User()->select('name', 'nik', 'alamat')->find(Auth::id());
        $jenisSurat = LayananSurat::labels();
        $dokumenPersyaratan = LayananSurat::documents();
        $layananData = LayananSurat::all();

        return view('user.pengajuan.create', compact('profile', 'jenisSurat', 'dokumenPersyaratan', 'layananData'));
    }

    public function store(Request $request)
    {
        $jenisSurat = LayananSurat::labels();
        $dokumenPersyaratan = LayananSurat::documents();

        $request->validate([
            'jenis_surat' => 'required|in:' . implode(',', array_keys($jenisSurat)),
            'keperluan' => 'nullable|string',
            'dokumen' => 'required|array',
            'dokumen.*' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $requiredDokumen = $dokumenPersyaratan[$request->jenis_surat];
        $uploadedDokumen = $request->file('dokumen', []);
        $missingDokumen = collect($requiredDokumen)
            ->reject(fn($namaDokumen) => isset($uploadedDokumen[$namaDokumen]) && $uploadedDokumen[$namaDokumen]->isValid())
            ->values();

        if ($missingDokumen->isNotEmpty()) {
            throw ValidationException::withMessages([
                'dokumen' => 'Dokumen berikut wajib diunggah: ' . $missingDokumen->implode(', '),
            ]);
        }

        $pengajuan = PengajuanSurat::create([
            'user_id' => Auth::id(),
            'jenis_surat' => $jenisSurat[$request->jenis_surat],
            'nama_pemohon' => Auth::user()->name,
            'nik' => Auth::user()->nik,
            'alamat' => Auth::user()->alamat,
            'keperluan' => $request->keperluan,
            'status' => 'menunggu',
        ]);

        foreach ($requiredDokumen as $namaDokumen) {
            $path = $uploadedDokumen[$namaDokumen]->store('persyaratan', 'public');

            PengajuanDokumen::create([
                'pengajuan_surat_id' => $pengajuan->id,
                'nama_dokumen' => $namaDokumen,
                'file_path' => $path,
            ]);
        }

        ActivityLog::create([
            'user_id' => Auth::id(),
            'pengajuan_surat_id' => $pengajuan->id,
            'type' => 'pengajuan_created',
            'title' => $pengajuan->nama_pemohon,
            'description' => 'Mengajukan permohonan ' . $pengajuan->jenis_surat,
            'metadata' => [
                'status' => $pengajuan->status,
                'jenis_surat' => $pengajuan->jenis_surat,
            ],
        ]);

        return redirect()
            ->route('user.pengajuan.index')
            ->with('success', 'Pengajuan surat berhasil dikirim.');
    }

    public function adminIndex(Request $request)
    {
        $jenisSurat = PengajuanSurat::query()
            ->select('jenis_surat')
            ->distinct()
            ->orderBy('jenis_surat')
            ->pluck('jenis_surat');

        $pengajuan = PengajuanSurat::with(['user', 'dokumen'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->search;

                $query->where(function ($query) use ($search) {
                    $query->where('nama_pemohon', 'like', "%{$search}%")
                        ->orWhere('nik', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('jenis_surat'), function ($query) use ($request) {
                $query->where('jenis_surat', $request->jenis_surat);
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->oldest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.pengajuan.index', compact('pengajuan', 'jenisSurat'));
    }

    public function updateStatus(Request $request, PengajuanSurat $pengajuanSurat)
    {
        $request->validate([
            'status' => 'required|in:menunggu,disetujui,ditolak',
            'catatan_admin' => 'required_if:status,ditolak|nullable|string',
            'nomor_surat' => 'required_if:status,disetujui|nullable|string|max:100',
            'nama_penanda_tangan' => 'required_if:status,disetujui|nullable|string|max:255',
            'nip_penanda_tangan' => 'nullable|string|max:100',
            'tanda_tangan' => 'required_if:status,disetujui|nullable|image|mimes:png,jpg,jpeg|max:2048',
        ], [
            'catatan_admin.required_if' => 'Catatan admin wajib diisi jika permohonan ditolak.',
            'nomor_surat.required_if' => 'Nomor surat wajib diisi saat permohonan disetujui.',
            'nama_penanda_tangan.required_if' => 'Nama kepala desa wajib diisi saat permohonan disetujui.',
            'tanda_tangan.required_if' => 'Tanda tangan kepala desa wajib diunggah saat permohonan disetujui.',
            'tanda_tangan.image' => 'Tanda tangan harus berupa gambar.',
            'tanda_tangan.mimes' => 'Tanda tangan harus berformat PNG, JPG, atau JPEG.',
            'tanda_tangan.max' => 'Ukuran tanda tangan maksimal 2 MB.',
        ]);

        $statusLama = $pengajuanSurat->status;

        $approvalData = [];

        if ($request->status === 'disetujui') {
            $approvalData = [
                'nomor_surat' => $request->nomor_surat,
                'nama_penanda_tangan' => $request->nama_penanda_tangan,
                'nip_penanda_tangan' => $request->nip_penanda_tangan,
                'tanda_tangan_path' => $request->file('tanda_tangan')
                    ->store('letter-assets/signatures/' . $pengajuanSurat->id, 'public'),
                'disetujui_at' => now(),
            ];
        }

        $pengajuanSurat->update([
            'status' => $request->status,
            'catatan_admin' => $request->catatan_admin,
            ...$approvalData,
        ]);

        ActivityLog::create([
            'user_id' => Auth::id(),
            'pengajuan_surat_id' => $pengajuanSurat->id,
            'type' => 'pengajuan_status_updated',
            'title' => $pengajuanSurat->nama_pemohon,
            'description' => 'Status ' . $pengajuanSurat->jenis_surat . ' diubah dari ' . $statusLama . ' menjadi ' . $pengajuanSurat->status,
            'metadata' => [
                'status' => $pengajuanSurat->status,
                'status_lama' => $statusLama,
                'jenis_surat' => $pengajuanSurat->jenis_surat,
            ],
        ]);

        return back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }
}

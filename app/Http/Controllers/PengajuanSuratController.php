<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PengajuanDokumen;
use App\Models\ActivityLog;
use Illuminate\Validation\ValidationException;

class PengajuanSuratController extends Controller
{
    private const JENIS_SURAT = [
        'nikah' => 'Surat Pernyataan Nikah',
        'usaha' => 'Surat Keterangan Usaha',
        'sktm' => 'Surat Keterangan Tidak Mampu',
        'pbb' => 'Surat Keterangan Lunas PBB',
    ];

    private const DOKUMEN_PERSYARATAN = [
        'nikah' => [
            'Fotokopi KTP Pemohon Suami dan Istri',
            'Fotokopi Kartu Keluarga',
            'Surat Pengantar RT RW',
            'Fotokopi Akta Nikah atau Buku Nikah',
            'Pas Foto 3x4 Background Biru',
        ],
        'usaha' => [
            'Fotokopi KTP Pemohon',
            'Fotokopi Kartu Keluarga',
            'Surat Pengantar RT RW',
            'Foto Tempat Usaha',
            'Surat Pernyataan Kepemilikan Usaha',
        ],
        'sktm' => [
            'Fotokopi KTP Pemohon',
            'Fotokopi Kartu Keluarga',
            'Surat Pengantar RT RW',
            'Foto Rumah Tampak Depan',
            'Slip Gaji atau Surat Pernyataan Penghasilan',
        ],
        'pbb' => [
            'Fotokopi KTP Pemohon',
            'Fotokopi Kartu Keluarga',
            'Bukti Bayar PBB Tahun Berjalan',
            'Fotokopi SPPT PBB Terakhir',
        ],
    ];

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

        return view('user.pengajuan.cetak', [
            'pengajuan' => $pengajuanSurat->load('user'),
        ]);
    }

    public function create()
    {
        return view('user.pengajuan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_surat' => 'required|in:' . implode(',', array_keys(self::JENIS_SURAT)),
            'nama_pemohon' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'alamat' => 'required|string',
            'keperluan' => 'nullable|string',
            'dokumen' => 'required|array',
            'dokumen.*' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $requiredDokumen = self::DOKUMEN_PERSYARATAN[$request->jenis_surat];
        $uploadedDokumen = $request->file('dokumen', []);
        $missingDokumen = collect($requiredDokumen)
            ->reject(fn ($namaDokumen) => isset($uploadedDokumen[$namaDokumen]) && $uploadedDokumen[$namaDokumen]->isValid())
            ->values();

        if ($missingDokumen->isNotEmpty()) {
            throw ValidationException::withMessages([
                'dokumen' => 'Dokumen berikut wajib diunggah: ' . $missingDokumen->implode(', '),
            ]);
        }

        $pengajuan = PengajuanSurat::create([
            'user_id' => Auth::id(),
            'jenis_surat' => self::JENIS_SURAT[$request->jenis_surat],
            'nama_pemohon' => $request->nama_pemohon,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
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
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.pengajuan.index', compact('pengajuan', 'jenisSurat'));
    }

    public function updateStatus(Request $request, PengajuanSurat $pengajuanSurat)
    {
        $request->validate([
            'status' => 'required|in:menunggu,diproses,disetujui,ditolak',
            'catatan_admin' => 'required_if:status,ditolak|nullable|string',
        ], [
            'catatan_admin.required_if' => 'Catatan admin wajib diisi jika permohonan ditolak.',
        ]);

        $statusLama = $pengajuanSurat->status;

        $pengajuanSurat->update([
            'status' => $request->status,
            'catatan_admin' => $request->catatan_admin,
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

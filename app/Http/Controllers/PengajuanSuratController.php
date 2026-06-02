<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PengajuanDokumen;

class PengajuanSuratController extends Controller
{
    private const JENIS_SURAT = [
        'nikah' => 'Surat Pernyataan Nikah',
        'usaha' => 'Surat Keterangan Usaha',
        'sktm' => 'Surat Keterangan Tidak Mampu',
        'pbb' => 'Surat Keterangan Lunas PBB',
    ];

    public function index()
    {
        $pengajuan = PengajuanSurat::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.pengajuan.index', compact('pengajuan'));
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
            'dokumen' => 'nullable|array',
            'dokumen.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $pengajuan = PengajuanSurat::create([
            'user_id' => Auth::id(),
            'jenis_surat' => self::JENIS_SURAT[$request->jenis_surat],
            'nama_pemohon' => $request->nama_pemohon,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'keperluan' => $request->keperluan,
            'status' => 'menunggu',
        ]);

        if ($request->hasFile('dokumen')) {
            foreach ($request->file('dokumen') as $namaDokumen => $file) {
                if ($file) {
                    $path = $file->store('persyaratan', 'public');

                    PengajuanDokumen::create([
                        'pengajuan_surat_id' => $pengajuan->id,
                        'nama_dokumen' => $namaDokumen,
                        'file_path' => $path,
                    ]);
                }
            }
        }

        return redirect()
            ->route('user.pengajuan.index')
            ->with('success', 'Pengajuan surat berhasil dikirim.');
    }

    public function adminIndex()
    {
        $pengajuan = PengajuanSurat::with('user')
            ->latest()
            ->get();

        return view('admin.pengajuan.index', compact('pengajuan'));
    }

    public function updateStatus(Request $request, PengajuanSurat $pengajuanSurat)
    {
        $request->validate([
            'status' => 'required|in:menunggu,diproses,disetujui,ditolak',
            'catatan_admin' => 'nullable|string',
        ]);

        $pengajuanSurat->update([
            'status' => $request->status,
            'catatan_admin' => $request->catatan_admin,
        ]);

        return back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }
}

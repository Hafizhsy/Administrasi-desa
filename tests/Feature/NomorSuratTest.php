<?php

use App\Models\PengajuanSurat;
use App\Models\User;
use App\Support\LayananSurat;
use Illuminate\Support\Carbon;

it('membuat nomor surat otomatis per jenis surat', function () {
    $user = User::factory()->create();

    PengajuanSurat::create([
        'user_id' => $user->id,
        'jenis_surat' => 'Keterangan Usaha',
        'nama_pemohon' => 'Pemohon Satu',
        'nik' => '7171010101010001',
        'alamat' => 'Kopandakan I',
        'status' => 'disetujui',
        'nomor_surat' => '1/DK.I/SKU/VIII/2026',
    ]);

    PengajuanSurat::create([
        'user_id' => $user->id,
        'jenis_surat' => 'Keterangan Usaha',
        'nama_pemohon' => 'Pemohon Dua',
        'nik' => '7171010101010002',
        'alamat' => 'Kopandakan I',
        'status' => 'disetujui',
        'nomor_surat' => '2/DK.I/SKU/VIII/2026',
    ]);

    PengajuanSurat::create([
        'user_id' => $user->id,
        'jenis_surat' => 'Keterangan Domisili',
        'nama_pemohon' => 'Pemohon Domisili',
        'nik' => '7171010101010003',
        'alamat' => 'Kopandakan I',
        'status' => 'disetujui',
        'nomor_surat' => '1/DK.I/SKD/VIII/2026',
    ]);

    $pengajuan = PengajuanSurat::create([
        'user_id' => $user->id,
        'jenis_surat' => 'Keterangan Usaha',
        'nama_pemohon' => 'Pemohon Tiga',
        'nik' => '7171010101010004',
        'alamat' => 'Kopandakan I',
        'status' => 'menunggu',
    ]);

    $nomorSurat = LayananSurat::generateNomorSurat($pengajuan, Carbon::create(2026, 8, 10));

    expect($nomorSurat)->toBe('3/DK.I/SKU/VIII/2026');
});

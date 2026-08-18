<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $fillable = [
        'user_id',
        'jenis_surat',
        'nama_pemohon',
        'nik',
        'alamat',
        'keperluan',
        'file_persyaratan',
        'status',
        'nomor_surat',
        'nama_penanda_tangan',
        'nip_penanda_tangan',
        'tanda_tangan_path',
        'disetujui_at',
        'catatan_admin',
    ];

    protected function casts(): array
    {
        return [
            'disetujui_at' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function dokumen()
    {
        return $this->hasMany(PengajuanDokumen::class);
    }
}

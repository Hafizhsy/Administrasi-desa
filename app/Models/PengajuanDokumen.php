<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanDokumen extends Model
{
    protected $fillable = [
        'pengajuan_surat_id',
        'nama_dokumen',
        'file_path',
    ];

    public function pengajuanSurat()
    {
        return $this->belongsTo(PengajuanSurat::class);
    }
}
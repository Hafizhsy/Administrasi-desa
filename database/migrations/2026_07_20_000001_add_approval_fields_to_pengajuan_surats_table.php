<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('pengajuan_surats', function (Blueprint $table) {
            $table->string('nomor_surat')->nullable()->after('status');
            $table->string('nama_penanda_tangan')->nullable()->after('nomor_surat');
            $table->string('nip_penanda_tangan')->nullable()->after('nama_penanda_tangan');
            $table->string('tanda_tangan_path')->nullable()->after('nip_penanda_tangan');
            $table->timestamp('disetujui_at')->nullable()->after('tanda_tangan_path');
        });
    }

    public function down(): void
    {
        Schema::table('pengajuan_surats', function (Blueprint $table) {
            $table->dropColumn([
                'nomor_surat',
                'nama_penanda_tangan',
                'nip_penanda_tangan',
                'tanda_tangan_path',
                'disetujui_at',
            ]);
        });
    }
};

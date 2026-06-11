<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('pengajuan_surats')
            ->where('status', 'diproses')
            ->update(['status' => 'menunggu']);

        DB::statement("ALTER TABLE pengajuan_surats MODIFY status ENUM('menunggu', 'disetujui', 'ditolak') NOT NULL DEFAULT 'menunggu'");
    }

    public function down(): void
    {
        DB::statement("ALTER TABLE pengajuan_surats MODIFY status ENUM('menunggu', 'diproses', 'disetujui', 'ditolak') NOT NULL DEFAULT 'menunggu'");
    }
};

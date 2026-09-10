<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('account_status')->default('pending')->after('role');
            $table->timestamp('account_verified_at')->nullable()->after('account_status');
            $table->foreignId('account_verified_by')->nullable()->after('account_verified_at')->constrained('users')->nullOnDelete();
        });

        DB::table('users')->update([
            'account_status' => 'active',
            'account_verified_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('account_verified_by');
            $table->dropColumn(['account_status', 'account_verified_at']);
        });
    }
};

<?php

namespace App\Providers;

use App\Models\PengajuanSurat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (! Auth::check()) {
                return;
            }

            $user = Auth::user();

            if ($user->role === 'admin') {
                $notificationCount = PengajuanSurat::where('status', 'menunggu')->count();
                $notificationItems = PengajuanSurat::where('status', 'menunggu')
                    ->latest()
                    ->take(5)
                    ->get()
                    ->map(fn (PengajuanSurat $pengajuan) => [
                        'icon' => 'pending_actions',
                        'title' => 'Permohonan baru menunggu review',
                        'description' => $pengajuan->nama_pemohon . ' mengajukan ' . $pengajuan->jenis_surat,
                        'time' => $pengajuan->created_at->diffForHumans(),
                        'href' => route('admin.pengajuan.index', ['search' => $pengajuan->nik]),
                    ]);
            } else {
                $notificationCount = PengajuanSurat::where('user_id', $user->id)
                    ->whereIn('status', ['disetujui', 'ditolak'])
                    ->count();
                $notificationItems = PengajuanSurat::where('user_id', $user->id)
                    ->latest('updated_at')
                    ->take(5)
                    ->get()
                    ->map(function (PengajuanSurat $pengajuan) {
                        $statusLabels = [
                            'menunggu' => 'masih menunggu review',
                            'disetujui' => 'telah disetujui',
                            'ditolak' => 'ditolak',
                        ];

                        return [
                            'icon' => $pengajuan->status === 'disetujui' ? 'task_alt' : ($pengajuan->status === 'ditolak' ? 'cancel' : 'hourglass_top'),
                            'title' => 'Status permohonan diperbarui',
                            'description' => $pengajuan->jenis_surat . ' ' . ($statusLabels[$pengajuan->status] ?? $pengajuan->status),
                            'time' => $pengajuan->updated_at->diffForHumans(),
                            'href' => route('user.pengajuan.index'),
                        ];
                    });
            }

            $view->with([
                'notificationCount' => $notificationCount,
                'notificationItems' => $notificationItems,
            ]);
        });
    }
}

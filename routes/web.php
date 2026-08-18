<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\PengajuanSuratController;
use App\Support\LayananSurat;

Route::get('/', function () {
    return view('welcome', [
        'layananUtama' => LayananSurat::all(),
    ]);
})->name('welcome');

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'create'])
        ->name('admin.login');

    Route::post('/admin/login', [AdminLoginController::class, 'store'])
        ->name('admin.login.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('user.dashboard');
    })->name('dashboard');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
            ->name('admin.dashboard');
        Route::get('/admin/activity-logs', [ActivityLogController::class, 'index'])
            ->name('admin.activity-logs.index');
        Route::get('/admin/laporan', [LaporanController::class, 'index'])
            ->name('admin.laporan.index');
        Route::get('/admin/laporan/rekap', [LaporanController::class, 'rekap'])
            ->name('admin.laporan.rekap');
        Route::get('/admin/pengajuan', [PengajuanSuratController::class, 'adminIndex'])->name('admin.pengajuan.index');
        Route::patch('/admin/pengajuan/{pengajuanSurat}/status', [PengajuanSuratController::class, 'updateStatus'])->name('admin.pengajuan.status');
        Route::get('/admin/pengajuan/{pengajuanSurat}/tanda-tangan', [PengajuanSuratController::class, 'signature'])->name('admin.pengajuan.signature');
    });

    Route::middleware(['user'])->group(function () {
        Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
            ->name('user.dashboard');
        Route::get('/user/pengajuan', [PengajuanSuratController::class, 'index'])->name('user.pengajuan.index');
        Route::get('/user/pengajuan/create', [PengajuanSuratController::class, 'create'])->name('user.pengajuan.create');
        Route::post('/user/pengajuan', [PengajuanSuratController::class, 'store'])->name('user.pengajuan.store');
        Route::get('/user/pengajuan/{pengajuanSurat}/cetak', [PengajuanSuratController::class, 'cetak'])->name('user.pengajuan.cetak');
        Route::get('/user/pengajuan/{pengajuanSurat}/tanda-tangan', [PengajuanSuratController::class, 'signature'])->name('user.pengajuan.signature');
    });
});

Route::get('/layanan/nikah', function () {
    return view('layanan.nikah');
})->name('layanan.nikah');

Route::get('/layanan/usaha', function () {
    return view('layanan.usaha');
})->name('layanan.usaha');

Route::get('/layanan/sktm', function () {
    return view('layanan.sktm');
})->name('layanan.sktm');

Route::get('/layanan/pbb', function () {
    return view('layanan.pbb');
})->name('layanan.pbb');

Route::get('/layanan/kitir_nikah', function () {
    return view('layanan.kitir_nikah');
});

Route::get('/layanan/kurang_mampu', function () {
    return view('layanan.kurang_mampu');
});

Route::get('/layanan/lunas_pbb', function () {
    return view('layanan.lunas_pbb');
});

Route::get('/layanan/{jenis}', function (string $jenis) {
    $view = 'layanan.' . $jenis;

    abort_unless(LayananSurat::find($jenis) && view()->exists($view), 404);

    return view($view);
})->name('layanan.detail');

require __DIR__ . '/auth.php';

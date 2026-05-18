<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\Auth\AdminLoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
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
    });

    Route::middleware(['user'])->group(function () {
        Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
            ->name('user.dashboard');
    });
});
require __DIR__ . '/auth.php';
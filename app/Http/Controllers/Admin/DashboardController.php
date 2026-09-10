<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\PengajuanSurat;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $pending = PengajuanSurat::where('status', 'menunggu')->count();
        $approved = PengajuanSurat::where('status', 'disetujui')->count();
        $rejected = PengajuanSurat::where('status', 'ditolak')->count();
        $all = PengajuanSurat::count();
        $pendingUsers = User::where('role', 'user')->where('account_status', User::STATUS_PENDING)->count();
        $recentActivities = ActivityLog::with(['user', 'pengajuanSurat'])
            ->latest()
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact('pending', 'approved', 'rejected', 'all', 'pendingUsers', 'recentActivities'));
    }
}

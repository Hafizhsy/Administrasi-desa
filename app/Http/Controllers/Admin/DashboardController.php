<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\PengajuanSurat;

class DashboardController extends Controller
{
    public function index()
    {
        $pending = PengajuanSurat::where('status', 'menunggu')->count();
        $progress = PengajuanSurat::where('status', 'diproses')->count();
        $approved = PengajuanSurat::where('status', 'disetujui')->count();
        $all = PengajuanSurat::count();
        $recentActivities = ActivityLog::with(['user', 'pengajuanSurat'])
            ->latest()
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact('pending', 'progress', 'approved', 'all', 'recentActivities'));
    }
}

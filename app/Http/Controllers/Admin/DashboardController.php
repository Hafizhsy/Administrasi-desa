<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;

class DashboardController extends Controller
{
    public function index()
    {
        $pending = PengajuanSurat::where('status', 'menunggu')->count();
        $today = PengajuanSurat::whereDate('updated_at', today())
            ->whereIn('status', ['diproses', 'disetujui', 'ditolak'])
            ->count();
        $all = PengajuanSurat::count();

        return view('admin.dashboard', compact('pending', 'today', 'all'));
    }
}

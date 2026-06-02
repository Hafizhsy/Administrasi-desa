<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengajuanSurat;

class DashboardController extends Controller
{
    public function index()
    {
        $pending = PengajuanSurat::where('status', 'pending')->count();
        $today = PengajuanSurat::where('created_at', today())->count();
        $all = PengajuanSurat::count();
        return view('admin.dashboard', compact('pending', 'today', 'all'));
    }
}

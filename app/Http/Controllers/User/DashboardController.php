<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use App\Support\LayananSurat;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $pengajuanTerbaru = PengajuanSurat::where('user_id', Auth::id())
            ->with('dokumen')
            ->latest()
            ->take(5)
            ->get();
        $layananDashboard = LayananSurat::all();

        return view('user.dashboard', compact('pengajuanTerbaru', 'layananDashboard'));
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $pengajuanTerbaru = PengajuanSurat::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

        return view('user.dashboard', compact('pengajuanTerbaru'));
    }
}

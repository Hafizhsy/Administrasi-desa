<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;

class ActivityLogController extends Controller
{
    public function index()
    {
        $activities = ActivityLog::with(['user', 'pengajuanSurat'])
            ->latest()
            ->paginate(15);

        return view('admin.activities.index', compact('activities'));
    }
}

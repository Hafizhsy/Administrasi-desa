<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserVerificationController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->string('search')->trim()->toString();
        $status = $request->string('status')->trim()->toString();

        $users = User::query()
            ->where('role', 'user')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('nik', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                });
            })
            ->when(in_array($status, [User::STATUS_PENDING, User::STATUS_ACTIVE], true), fn ($query) => $query->where('account_status', $status))
            ->orderByRaw("case when account_status = ? then 0 else 1 end", [User::STATUS_PENDING])
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $pendingCount = User::where('role', 'user')->where('account_status', User::STATUS_PENDING)->count();
        $activeCount = User::where('role', 'user')->where('account_status', User::STATUS_ACTIVE)->count();

        return view('admin.users.index', compact('users', 'pendingCount', 'activeCount'));
    }

    public function activate(User $user): RedirectResponse
    {
        abort_unless($user->role === 'user', 404);

        $user->forceFill([
            'account_status' => User::STATUS_ACTIVE,
            'account_verified_at' => now(),
            'account_verified_by' => auth()->id(),
        ])->save();

        return back()->with('success', 'Akun warga berhasil diaktifkan.');
    }
}

<?php

use App\Models\User;

test('login screen can be rendered', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});

test('users can authenticate using email on the login screen', function () {
    $user = User::factory()->create();

    $response = $this->post('/login', [
        'login' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('users can authenticate using NIK on the login screen', function () {
    $user = User::factory()->create(['nik' => '7171000101010001']);

    $response = $this->post('/login', [
        'login' => $user->nik,
        'password' => 'password',
    ]);

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $this->post('/login', [
        'login' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});

test('pending users can not authenticate', function () {
    $user = User::factory()->create([
        'account_status' => User::STATUS_PENDING,
        'account_verified_at' => null,
        'account_verified_by' => null,
    ]);

    $this->post('/login', [
        'login' => $user->email,
        'password' => 'password',
    ])->assertSessionHasErrors([
        'login' => 'Akun Anda belum aktif. Silakan tunggu proses verifikasi oleh admin desa.',
    ]);

    $this->assertGuest();
});

test('admin can activate pending user account', function () {
    $admin = User::factory()->create([
        'role' => 'admin',
        'account_status' => User::STATUS_ACTIVE,
    ]);
    $user = User::factory()->create([
        'account_status' => User::STATUS_PENDING,
        'account_verified_at' => null,
        'account_verified_by' => null,
    ]);

    $this->actingAs($admin)
        ->patch(route('admin.users.activate', $user))
        ->assertSessionHas('success', 'Akun warga berhasil diaktifkan.');

    $user->refresh();

    expect($user->account_status)->toBe(User::STATUS_ACTIVE);
    expect($user->account_verified_by)->toBe($admin->id);
    expect($user->account_verified_at)->not->toBeNull();
});

test('users can logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $this->assertGuest();
    $response->assertRedirect('/');
});

<?php

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'nik' => '7171000101010001',
        'alamat' => 'Jl. Test No. 1',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertGuest();
    $response->assertRedirect(route('login'));

    $this->assertDatabaseHas('users', [
        'email' => 'test@example.com',
        'nik' => '7171000101010001',
        'account_status' => 'pending',
    ]);
});

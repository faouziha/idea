<?php

use App\Models\User;

test('log in a user', function () {
    $user = User::factory()->create([
        'password' => 'password',
    ]);

    visit('/login')
        ->fill('email', $user->email)
        ->fill('password', 'password')
        ->click('@login-button')
        ->assertPathIs('/');

    $this->assertAuthenticated();
});

test('log out a user', function () {
    $user = User::factory()->create([
        'password' => 'password',
    ]);

    $this->actingAs($user);

    visit('/')
        ->click('Logout');

    $this->assertGuest();
});

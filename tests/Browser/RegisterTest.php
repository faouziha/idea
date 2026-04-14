<?php

use Illuminate\Support\Facades\Auth;

test('register a user', function () {
    visit('/register')
        ->fill('name', 'John Doe')
        ->fill('email', 'john@example.com')
        ->fill('password', 'password')
        ->click('Create Account')
        ->assertPathIs('/');

    $this->assertAuthenticated();

    expect(Auth::user())->toMatchArray([
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ]);
});

test('require a valid email', function () {
    visit('/register')
        ->fill('name', 'John Doe')
        ->fill('email', 'invalid-email')
        ->fill('password', 'password')
        ->click('Create Account')
        ->assertPathIs('/register');
});

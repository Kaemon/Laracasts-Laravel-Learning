<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

test('login an existing user', function () {
    /** @var TestCase $this */
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('Password123!'),
    ]);
    visit('/login')
        ->fill('email', 'test@example.com')
        ->fill('password', 'Password123!')
        ->press('@login-button')
        ->assertPathIs('/');
    $this->assertAuthenticated();

});
it('logs out a logged in user', function () {
    /** @var TestCase $this */
    $user = User::factory()->create();
    Auth::login($user);
    visit('/')
        ->click('Log Out');
    $this->assertGuest();
});

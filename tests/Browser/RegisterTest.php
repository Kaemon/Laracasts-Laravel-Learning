<?php

use Illuminate\Support\Facades\Auth;

test('register a new user', function () {
    /** @var \Tests\TestCase $this */
    visit('/register')
        ->fill('name','Test User')
        ->fill('email','test@example.com')
        ->fill('password','Password123!')
        ->press('@register-button')
        ->assertPathIs('/'); 
    $this->assertAuthenticated();   
    expect(Auth::user())->toMatchArray([
        'name'=>'Test User',
        'email'=>'test@example.com',
    ]);
    $this->assertDatabaseHas('users', [
        'email' => 'test@example.com',
    ]);
});

it('requires a valid email', function(){
    /** @var \Tests\TestCase $this */
    visit('/register')
        ->fill('name','Test User')
        ->fill('email','not-an-email')
        ->fill('password','Password123!')
        ->press('@register-button')
        ->assertPathIs('/register');
});

<?php

use App\Models\User;
use Tests\TestCase;
use App\Models\Idea;

it('creates a new idea',function(){
    /** @var TestCase $this */
    /** @var User $user */
    $user = User::factory()->create();
    $this->actingAs($user);
    visit('/ideas')
        ->click('@create-idea-button')
        ->fill('title','Some Example Title')
        ->click('@button-status-completed')
        ->fill('description','An example description')
        ->fill('@new-link','http://example.com')
        ->click('@submit-new-link-button')
        ->click('Create')
        ->assertPathIs('/ideas');

     /** @var Idea $idea */
    expect($user->ideas()->first())->toMatchArray([
        'title' => 'Some Example Title',
        'status' => 'completed',
        'description' => 'An example description',
        'links' => ['http://example.com']
    ]);
});
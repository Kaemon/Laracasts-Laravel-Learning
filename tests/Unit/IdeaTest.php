<?php

use App\Models\Idea;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

test('it belongs to a user', function () {
    $idea = Idea::factory()->create();
    expect($idea->user)->toBeInstanceOf(User::class);
});
it('it can have steps', function () {
    $idea = Idea::factory()->create();
    expect($idea->steps)->toBeEmpty();
    $idea->steps()->create([
        'description'=> 'Do the thing',
    ]);
    expect($idea->fresh()->steps)->toHaveCount(1);
});

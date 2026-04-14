<?php

use App\Models\Idea;
use App\Models\User;

test('it belong to a user', function () {
    $idea = Idea::factory()->create();

    expect($idea->user)->toBeInstanceOf(User::class);
});

test('it belong to a steps', function () {
    $idea = Idea::factory()->create();

    expect($idea->steps)->toBeEmpty();

    $idea->steps()->create([
        'description' => 'Do something',
    ]);

    expect($idea->fresh()->steps)->toHaveCount(1);
});

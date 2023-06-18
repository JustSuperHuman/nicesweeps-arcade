<?php

use App\Models\User;
use function Pest\Laravel\actingAs;

it('works', function () {
    actingAs(User::factory()->create())
        ->getJson(route('dashboard'))
        ->assertOk()
        ->assertViewIs('dashboard');
});

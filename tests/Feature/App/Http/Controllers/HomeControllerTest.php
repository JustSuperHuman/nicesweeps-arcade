<?php

use function Pest\Laravel\getJson;

it('works', function () {
    getJson(route('home'))
        ->assertOk()
        ->assertViewIs('home');
});

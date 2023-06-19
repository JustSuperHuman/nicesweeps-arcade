<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        User::factory()->create([
            'name' => 'John Smith',
            'email' => 'johnsmith@example.com',
        ]);

        User::factory()->count(50)->create();

        Game::factory()->count(50)->create();
    }
}

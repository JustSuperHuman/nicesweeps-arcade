<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    public function definition() : array
    {
        return [
            'name' => fake()->sentence(3, true),
            'description' => fake()->paragraph(),
        ];
    }
}

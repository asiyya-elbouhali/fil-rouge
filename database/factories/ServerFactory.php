<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'adresse' => fake()->address(),
            'default_database' => fake()->word(),
            'login' => fake()->unique()->safeEmail(),
            'password' => fake()->password(),
            'port' => fake()->numberBetween(1,500),
        ];
    }
}

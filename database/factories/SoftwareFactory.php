<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SoftwareFactory extends Factory
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
            'version' => fake()->word(),
            'add_date' => fake()->date(),
            'compatibility' => fake()->word(),
            'developer' => fake()->name(),
            'image' => fake()->imageUrl(),
            'description' => fake()->text(),
            'url' => fake()->url(),
            'icon' => fake()->imageUrl(),
            'user_id' => fake()->numberBetween(1,10),
        ];
    }
}

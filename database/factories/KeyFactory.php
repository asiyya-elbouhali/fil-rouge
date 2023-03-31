<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class KeyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'initial_key' => fake()->text(),
            'activated_key' => fake()->text(),
            'device_number' => fake()->word(),
            'expiration_date' => fake()->date(),
            'auto_renewal' => fake()->boolean(),
            'order_id' => fake()->numberBetween(1,10),
            'key_statuses_id' => fake()->numberBetween(1,10),

         


        ];
    }
}

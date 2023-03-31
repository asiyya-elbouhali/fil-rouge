<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LicenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => fake()->numberBetween(100,1000),
            'description' => fake()->text(),
            'software_id' => fake()->numberBetween(1,10),
            'business_categories_id'=> fake()->numberBetween(1,10),

        ];
    }
}

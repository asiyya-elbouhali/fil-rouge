<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BusinessCategoryFactory extends Factory
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
            'number_of_devices' => fake()->numberBetween(1,5),
            'description' => fake()->text(),

        ];
    }
}

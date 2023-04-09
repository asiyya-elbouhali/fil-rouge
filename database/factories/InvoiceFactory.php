<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => fake()->text(),
            'date' => fake()->date(),
            'tva' => fake()->numberBetween(200,2000),
            'total' => fake()->numberBetween(200,2000),
            'order_id' => fake()->numberBetween(1,10),
            'paid' => fake()->boolean(),

        ];
    }
}

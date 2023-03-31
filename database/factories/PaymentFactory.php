<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_date' => fake()->date(),
            'transaction_number' => fake()->numberBetween(1,100),
            'amount' => fake()->numberBetween(200,1000),
            'gateway_id' => fake()->numberBetween(1,10),
            'invoice_id'=> fake()->numberBetween(1,10),
        ];
    }
}

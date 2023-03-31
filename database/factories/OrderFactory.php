<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_date' => fake()->date(),
            'automatically_renew' => fake()->boolean(),
            'price' => fake()->numberBetween(200,1000),
            'number_of_device' => fake()->numberBetween(1,5),
            'total_before_tax' => fake()->numberBetween(200,2000),
            'total_after_tax' => fake()->numberBetween(200,2000),
            'next_due_date' => fake()->date(),
            'web_hosting' => fake()->boolean(),
            'demon_version' => fake()->boolean(),
            'business_categories_id'=> fake()->numberBetween(1,10),
            'user_id'=> fake()->numberBetween(1,10),
            'software_id' => fake()->numberBetween(1,10),
            'order_status_id' => fake()->numberBetween(1,10),
            'server_id' => fake()->numberBetween(1,10),


        ];
    }
}

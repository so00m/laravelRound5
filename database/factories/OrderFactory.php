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
            'client_id'=>fake()->numberBetween(1,5),
            'total_amount' => fake()->numberBetween(100, 1000),
            'order_date'=>fake()->date('Y-m-d')
        ];
    }
}

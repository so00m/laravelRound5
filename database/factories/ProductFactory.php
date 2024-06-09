<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productName'=> fake()->word(),
            'price'=> fake()->numberBetween(5,10),
            'discription'=> fake()->sentence(),
            'image'=> fake()->image(null, 640, 480)
        ];
    }
}

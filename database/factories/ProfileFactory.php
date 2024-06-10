<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
               
                return [ 

                                'admin_id'=>fake()->numberBetween(1,5),
                                'userName'=> fake()->name(),
                                'phone'=> fake()->phoneNumber(),
                                'address' =>  fake()->streetAddress(),
                                'image'=> fake()->image(null, 640, 480),
                            ];
    }


}

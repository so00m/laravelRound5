<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 
                // 'name' => fake()->name(),
                // 'email' => fake()->unique()->safeEmail(),
                // 'email_verified_at' => now(),
                // 'password' => static::$password ??= Hash::make('password'),
                // 'remember_token' => Str::random(10),
               
                'clientName' => fake()->name(),
                'phone' => fake()->phoneNumber(),
                'email' => fake()->unique()->safeEmail(),
                'website' => fake()->url(),
                'city' =>  fake()->randomElement(['Cairo','Giza','Alex']),
                'image' => fake()->image(null, 640, 480),
                'active' => rand(0, 1),
                'address' =>  fake()->streetAddress(),
        ];
    }
}

<?php

namespace Database\Seeders;
use App\Models\ProductCategory;
use App\Models\Category;
use App\Models\User;
use App\Models\Client;
use App\Models\City;
use App\Models\Product;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
     /**
     * Seed the application's database.
     */

    public function run(): void
    {

      
        // City::factory(20)->create();
        // Client::factory(10)->create();
        Category::factory(5)->create();
        Product::factory(5)->create();
        ProductCategory::factory(25)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     ClientSeeder::class,
        // ]);
        
    }
}

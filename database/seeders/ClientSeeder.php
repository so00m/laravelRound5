<?php

namespace Database\Seeders;
//use Illuminate\Support\Facades\Hash;    //to make the passwords hashed 

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Client;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //**// factory method
                Client::factory(10)->create();
                
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@example.com',
        //     'password' => Hash::make('password'), ]);


//**//   -----Client seeder method

        // DB::table('clients')->insert([
        //     'clientName' => Str::random(50),
        //     'phone' => Str::random(20),
        //     'email' => Str::random(20) . '@example.com',
        //     'website' => Str::random(20),
        //     'city' => Str::random(1) === 0 ? 'Cairo' : (Str::random(1) === 1 ? 'Giza' : 'Alex'),
        //     'image' => Str::random(50),
        //     'active' => rand(0, 1),
        //     'address' => Str::random(50)
        // ]);



        
    }
}

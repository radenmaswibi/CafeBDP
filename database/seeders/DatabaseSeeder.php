<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Product::create([
            "name" => "Basreng" ,
            "image" => "https://dummyimage.com/200x200/4D588E/fff&text=PHP",
            "price" => "1000",
            "description" => "pppppp"
        ]);
        \App\Models\Product::create([
            "name" => "Seblak" ,
            "image" => "https://dummyimage.com/200x200/4D588E/fff&text=PHP",
            "price" => "12000",
            "description" => "pppppp"
        ]);
        \App\Models\Product::create([
            "name" => "Mie Ayam" ,
            "image" => "https://dummyimage.com/200x200/4D588E/fff&text=PHP",
            "price" => "12000",
            "description" => "pppppp"
        ]);
        \App\Models\Product::create([
            "name" => "Piscok" ,
            "image" => "https://dummyimage.com/200x200/4D588E/fff&text=PHP",
            "price" => "2000",
            "description" => "pppppp"
        ]);
      
    }
}

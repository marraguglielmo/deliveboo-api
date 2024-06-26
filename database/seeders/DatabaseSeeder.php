<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Restaurant;
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

        $this->call([
            UserTableSeeder::class,
            RestaurantTableSeeder::class,
            TypeTableSeeder::class,
            DishTableSeeder::class,
            OrderTableSeeder::class,
            RestaurantTypeTableSeeder::class,
            DishOrderTableSeeder::class,
        ]);
    }
}

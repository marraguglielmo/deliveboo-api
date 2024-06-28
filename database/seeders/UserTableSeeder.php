<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config('restaurants');

        $faker = FakerFactory::create('it_IT');

        foreach ($restaurants as $restaurant) {
            $new_user = new User();
            $new_user->name = $faker->firstName() . ' ' . $faker->lastName();
            $new_user->email = Helper::generateEmail($restaurant['business_name'], Restaurant::class);
            $new_user->password = Hash::make("user1234");
            $new_user->save();
        }
    }
}

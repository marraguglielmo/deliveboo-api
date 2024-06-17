<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config('restaurants');

        foreach ($restaurants as $restaurant) {
            $new_user = new User();
            $new_user->name = "user";
            $new_user->surname = "user";
            $new_user->email = Helper::generateEmail($restaurant['business_name'], Restaurant::class);
            $new_user->password = Hash::make("user123");
            $new_user->vat_number = "12345678910";
            $new_user->save();
        }
    }
}

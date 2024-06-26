<?php

namespace Database\Seeders;

use App\Functions\Helper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config('restaurants');

        foreach ($restaurants as $restaurant) {
            $new_restaurant = new Restaurant();
            $new_restaurant->business_name = $restaurant['business_name'];
            $new_restaurant->slug = Helper::generateSlug($restaurant['business_name'], Restaurant::class);
            $new_restaurant->email = Helper::generateEmail($restaurant['business_name'], Restaurant::class);
            $new_restaurant->address = $restaurant['address'];
            $new_restaurant->vat_number = "12345678910";
            $new_restaurant->image = $restaurant['image'];
            $new_restaurant->phone_number = $restaurant['phone_number'];
            $new_restaurant->user_id = User::where('email', Helper::generateEmail($restaurant['business_name'], Restaurant::class))->first()->id;
            $new_restaurant->save();
        }
    }
}

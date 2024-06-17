<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = config('restaurants');

        foreach ($restaurants as $restaurantData) {
            $restaurant = Restaurant::where('business_name', $restaurantData['business_name'])->first();
            if ($restaurant) {
                foreach ($restaurantData['dishes'] as $dish) {
                    $new_dish = new Dish();
                    $new_dish->restaurant_id = $restaurant->id;
                    $new_dish->name = $dish['name'];
                    $new_dish->slug = Helper::generateSlug($new_dish->name, Dish::class);
                    $new_dish->price = $dish['price'];
                    $new_dish->description = implode(' - ', $dish['ingredients']);
                    $new_dish->image = $dish['image'];
                    $new_dish->available = $dish['available'];
                    $new_dish->save();
                }
            }
        }
    }
}

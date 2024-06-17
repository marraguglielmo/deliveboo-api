<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Type;


class RestaurantTypeTableSeeder extends Seeder
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
                foreach ($restaurantData['types'] as $typeName) {
                    $type = Type::where('name', $typeName)->first();
                    if ($type) {

                        if (!$restaurant->types()->where('type_id', $type->id)->exists()) {
                            $restaurant->types()->attach($type->id);
                        }
                    }
                }
            }
        }
    }
}

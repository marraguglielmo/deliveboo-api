<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\DishOrder;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = Order::all();

        foreach ($orders as $order) {
            $restaurant_id = Restaurant::inRandomOrder()->first()->id;
            $dish_id_array = [];

            while (count($dish_id_array) < 2) {
                $dish_id = Dish::where('restaurant_id', $restaurant_id)->inRandomOrder()->first()->id;

                if (!in_array($dish_id, $dish_id_array)) {
                    $dish_id_array[] = $dish_id;

                    $dish_price = Dish::where('id', $dish_id)->first()->value('price');

                    $quantity = mt_rand(1, 5);
                    $total_price = $quantity * $dish_price;

                    DB::table('dish_order')->insert([

                        'dish_id' => $dish_id,
                        'order_id' => $order->id,

                        'total_price' => $total_price,
                        'quantity' => $quantity,

                    ]);
                }
            }
        }
    }
}

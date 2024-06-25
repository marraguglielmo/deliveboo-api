<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OrderTableSeeder extends Seeder
{
    /**

Run the database seeds.*/
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $new_order = new Order();
            $new_order->shipping_price = mt_rand(2, 5);
            $new_order->total_price = mt_rand(10, 50);
            $new_order->payment_method = "card";
            $new_order->name = "Client" . ($i + 1);
            $new_order->surname = "Surname" . ($i + 1);
            $new_order->email = Helper::generateEmail($new_order->name);
            $new_order->phone_number = "+39 " . rand(pow(10, 9), pow(10, 10) - 1);
            $new_order->address = "Via Roma " . ($i + 1);
            $new_order->note = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit";
            $new_order->date = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d H:i:s');
            $new_order->save();
        }
    }
}

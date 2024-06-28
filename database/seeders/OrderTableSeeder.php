<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class OrderTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = FakerFactory::create('it_IT'); // Specifica la localizzazione italiana

        for ($i = 0; $i < 350; $i++) {
            $new_order = new Order();
            $new_order->shipping_price = mt_rand(2, 5);
            $new_order->total_price = mt_rand(10, 50);
            $new_order->payment_method = "card";
            $new_order->name = $faker->firstName();
            $new_order->surname = $faker->lastName();
            $new_order->email = Helper::generateEmail($new_order->name, $new_order->surname);
            $new_order->phone_number = "+39 " . $faker->numberBetween(3000000000, 3999999999);
            $new_order->address = $faker->streetAddress;
            $new_order->note = $faker->text();
            $new_order->date = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d H:i:s');
            $new_order->status = true;
            $new_order->save();
        }
    }
}

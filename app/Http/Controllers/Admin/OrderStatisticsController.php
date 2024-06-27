<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Restaurant;
use Carbon\Carbon;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderStatisticsController extends Controller
{
    public function index()
    {
        // Ordini univoci fatti al ristorante loggato
        $orders = Order::whereHas('dishes', function ($query) {
            $query->where('restaurant_id', Auth::user()->id);
        })->where('status', 1)->with('dishes')->get();

        $monthsOrders = [
            [
                'year' => '23',
                'month' => '06',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '23',
                'month' => '07',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '23',
                'month' => '08',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '23',
                'month' => '09',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '23',
                'month' => '10',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '23',
                'month' => '11',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '23',
                'month' => '12',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '24',
                'month' => '01',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '24',
                'month' => '02',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '24',
                'month' => '03',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '24',
                'month' => '04',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '24',
                'month' => '05',
                'quantity' => 0,
                'orders_amount' => 0
            ],
            [
                'year' => '24',
                'month' => '06',
                'quantity' => 0,
                'orders_amount' => 0
            ]
        ];

        foreach ($orders as $order) {
            $timestamp = strtotime($order->date);
            $month = date('m', $timestamp);
            $year = date('y', $timestamp);

            foreach ($monthsOrders as &$monthOrder) {
                if ($year == $monthOrder['year'] && $month == $monthOrder['month']) {
                    $monthOrder['quantity']++;
                    $monthOrder['orders_amount'] = $monthOrder['orders_amount'] + $order['total_price'];
                    break;
                }
            }
        }

        $orders_num = [];
        $orders_amount = [];

        foreach ($monthsOrders as &$monthOrder) {
            array_push($orders_num, $monthOrder['quantity']);
        }

        foreach ($monthsOrders as &$monthOrder) {
            array_push($orders_amount, $monthOrder['orders_amount']);
        }

        $statistics = [
            'orders_num' => $orders_num,
            'orders_amount' => $orders_amount,
        ];

        return view('statistics.index', compact('statistics'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Restaurant;
use Carbon\Carbon;
use DB;
use App\Http\Controllers\Controller;

class OrderStatisticsController extends Controller
{
    public function index()
    {
        // Recupera il numero di ordini per ristorante per ogni mese usando Eloquent
        $orders = Order::with('dishes')
            ->selectRaw('dishes.restaurant_id, MONTH(orders.date) as month, COUNT(orders.id) as total_orders')
            ->join('dish_order', 'orders.id', '=', 'dish_order.order_id')
            ->join('dishes', 'dish_order.dish_id', '=', 'dishes.id')
            ->groupBy('dishes.restaurant_id', 'month')
            ->get();

        // Recupera tutti i ristoranti
        $restaurants = Restaurant::all();

        // Prepara i dati per le statistiche
        $statistics = [];
        foreach ($restaurants as $restaurant) {
            $monthlyOrders = array_fill(1, 12, 0); // Inizializza tutti i mesi a 0
            foreach ($orders as $order) {
                if ($order->restaurant_id == $restaurant->id) {
                    $monthlyOrders[$order->month] = $order->total_orders;
                }
            }
            $statistics[] = [
                'restaurant' => $restaurant->business_name,
                'orders' => $monthlyOrders,
            ];
        }

        // Passa i dati alla vista
        return view('statistics.index', compact('statistics'));
    }
}

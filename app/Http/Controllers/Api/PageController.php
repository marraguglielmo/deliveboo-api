<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{

    public function index()
    {
        $success = true;
        $restaurants = Restaurant::with('dishes', 'types')->get();
        return response()->json(compact('success', 'restaurants'));
    }

    public function getTypes()
    {
        $success = true;

        $types = Type::all();
        return response()->json(compact('success', 'types'));
    }

    public function getRestaurantBySlug($slug)
    {
        $restaurant = Restaurant::where('slug', $slug)->with('dishes', 'types')->first();
        if ($restaurant) {
            $success = true;

            if (Str::startsWith($restaurant->image, ['http://', 'https://'])) {
                $restaurant->image = $restaurant->image;
            } else if ($restaurant->image) {
                $restaurant->image = Storage::url($restaurant->img);
            } else {
                $restaurant->image = Storage::url('resources/img/placeholder.jpg');
            }

            foreach ($restaurant->dishes as $dish) {
                if (Str::startsWith($dish->image, ['http://', 'https://'])) {
                    $dish->image = $dish->image;
                } else if ($dish->image) {
                    $dish->image = Storage::url($dish->image);
                } else {
                    $dish->image = Storage::url('resources/img/placeholder.jpg');
                }
            }
        } else {
            $success = false;
        }
        return response()->json(compact('success', 'restaurant'));
    }

    public function getClientToken()
    {
        $success = false;
        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env("BRAINTREE_MERCHANT_ID"),
            'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
            'privateKey' => env("BRAINTREE_PRIVATE_KEY")
        ]);
        $clientToken = $gateway->clientToken()->generate();
        if ($clientToken) {
            $success = true;
        }

        return response()->json(compact('success', 'clientToken'));
    }

    public function paymentRequest(Request $request)
    {
        $form_data = $request->all();
        $nonceFromTheClient = $form_data["payment_method_nonce"];

        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env("BRAINTREE_MERCHANT_ID"),
            'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
            'privateKey' => env("BRAINTREE_PRIVATE_KEY")
        ]);

        if ($nonceFromTheClient != null) {

            $result = $gateway->transaction()->sale([
                'amount' => '10.00',
                'paymentMethodNonce' => $nonceFromTheClient,
                'options' => [
                    'submitForSettlement' => True
                ]
            ]);

            if ($result->success) {
                return view('thankyoupage');
            } else {
                return view('rejectpayment');
            }
        }
    }

    public function store(Request $request)
    {
        $order_data = $request->all();

        $order_data['shipping_price'] = 0;

        $order_data['payment_method'] = "card";

        $total_price_wip = 0;

        for ($i = 0; $i < count($order_data['cart']); $i++) {
            $total_price_wip += ($order_data['cart'][$i]['price'] * $order_data['cart'][$i]['quantity']);
        }

        $order_data['total_price'] = $total_price_wip;

        $new_order = new Order();
        $new_order->fill($order_data);
        $new_order->save();

        $success = true;

        return response()->json(compact('order_data', 'success'));
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Lead;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContact;
use App\Mail\NewOrder;

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
                $restaurant->image = Storage::url($restaurant->image);
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
        // Creazione di un'istanza di Braintree Gateway (credenziali da file env)
        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env("BRAINTREE_MERCHANT_ID"),
            'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
            'privateKey' => env("BRAINTREE_PRIVATE_KEY")
        ]);

        // Generazione del client token
        $clientToken = $gateway->clientToken()->generate();
        if ($clientToken) {
            $success = true;
        }

        // Restituzione al fe del client token e dello stato
        return response()->json(compact('success', 'clientToken'));
    }

    public function paymentRequest(Request $request)
    {
        // Recupero dati da form di pagamento a fe
        $form_data = $request->all();
        $nonceFromTheClient = $form_data["payment_method_nonce"];
        $total_amount = $form_data['total_order'];
        $order_id = $form_data['id'];

        // Creazione di un'istanza di Braintree Gateway (credenziali da file env)
        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env("BRAINTREE_MERCHANT_ID"),
            'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
            'privateKey' => env("BRAINTREE_PRIVATE_KEY")
        ]);

        // Verifica validità nonce ricevuto dal client
        if ($nonceFromTheClient != null) {

            // Se valido, richiesta di transazione tramite Braintree
            $result = $gateway->transaction()->sale([
                'amount' => $total_amount,
                'paymentMethodNonce' => $nonceFromTheClient,
                'options' => [
                    'submitForSettlement' => True
                ]
            ]);

            if ($result->success) {

                // Se positiva, aggiornamento stato dell'ordine nella tabella 'orders'
                DB::table('orders')->where('id', $order_id)->update(['status' => $result->success]);

                // Recupero dell'email dell'ordine e poi dei dati necessari
                $mail_order = DB::table('orders')->where('id', $order_id)->first();

                if ($mail_order) {
                    $restaurant_email = DB::table('orders')
                        ->join('dish_order', 'orders.id', '=', 'dish_order.order_id')
                        ->join('dishes', 'dish_order.dish_id', '=', 'dishes.id')
                        ->join('restaurants', 'dishes.restaurant_id', '=', 'restaurants.id')
                        ->where('orders.id', $order_id)
                        ->value('restaurants.email');

                    /* Mail */
                    $new_lead = new Lead();
                    $new_lead->fill((array) $mail_order);
                    $new_lead->save();

                    //Invio email al ristoratore
                    // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewContact($new_lead));
                    Mail::to($restaurant_email)->send(new NewContact($new_lead));

                    //Invio email al cliente
                    Mail::to($new_lead->email)->send(new NewOrder($new_lead));
                    /* /Mail */
                }

                return view('thankyoupage');
            } else {

                DB::table('orders')->where('id', $order_id)->update(['status' => $result->success]);
                return view('rejectpayment');
            }
        }
    }

    public function store(OrderRequest $request)
    {
        $order_data = $request->all();

        $order_data['shipping_price'] = 0;

        $order_data['payment_method'] = "card";

        $total_price_wip = 0;

        for ($i = 0; $i < count($order_data['cart']); $i++) {
            $total_price_wip += ($order_data['cart'][$i]['price'] * $order_data['cart'][$i]['quantity']);
        }

        $order_data['total_price'] = $total_price_wip;

        $order_data['date'] = now();

        $new_order = new Order();
        $new_order->fill($order_data);
        $new_order->save();

        $order_data['id'] = $new_order->id;

        foreach ($order_data['cart'] as $cart_item) {
            DB::table('dish_order')->insert([

                'dish_id' => $cart_item['id'],
                'order_id' => $new_order->id,

                'total_price' => $cart_item['quantity'] * $cart_item['price'],
                'quantity' => $cart_item['quantity'],
            ]);
        }

        $success = true;

        return response()->json(compact('order_data', 'success'));
    }
}

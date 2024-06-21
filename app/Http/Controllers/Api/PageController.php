<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
}

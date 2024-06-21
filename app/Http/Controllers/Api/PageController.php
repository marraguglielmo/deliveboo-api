<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Type;
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
            if ($restaurant->image) {
                $restaurant->image = Storage::url($restaurant->image);
            } else {
                $restaurant->image = Storage::url('resources/img/placeholder.jpg');
            }
        } else {
            $success = false;
        }
        return response()->json(compact('success', 'restaurant'));
    }
}

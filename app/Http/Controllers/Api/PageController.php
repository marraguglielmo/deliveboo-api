<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class PageController extends Controller
{

    public function index()
    {
        $success = true;
        $restaurants = Restaurant::with('dishes', 'types')->get();
        return response()->json(compact('success', 'restaurants'));
    }
}

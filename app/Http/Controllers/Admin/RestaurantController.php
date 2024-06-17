<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = auth()->user()->restaurants;
        return view('admin.restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $route = route('admin.restaurants.store');
        $title = 'Crea un nuovo ristorante';
        $method = 'POST';
        return view('admin.restaurants.create-edit', compact('route', 'title', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        $route = route('admin.restaurants.update', $restaurant);
        $title = 'Modifica ristorante';
        $method = 'PUT';
        return view('admin.restaurants.create-edit', compact('route', 'title', 'method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $restaurant = Restaurant::find($id);
        if ($restaurant) {
            $restaurant->delete();
            return redirect()->route('admin.restaurants.index')->with('success', 'Ristorante eliminato correttamente');
        } else {
            return redirect()->route('admin.restaurants.index')->with('error', 'Ristorante non trovato');
        }
    }
}

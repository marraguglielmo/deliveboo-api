<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DishRequest;
use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\Type;
use App\Functions\Helper;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Restaurant $restaurant)
    {
        $route = route('admin.dishes.store');
        $title = 'Crea un nuovo piatto';
        $dish = null;
        $method = 'POST';
        $submit = 'Crea';
        return view('admin.dishes.create-edit', compact('route', 'submit', 'title', 'method', 'restaurant', 'dish'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DishRequest $request)
    {
        $form_data = $request->all();
        $form_data['available'] = $request->has('available') ? 1 : 0;
        $form_data['slug'] = Helper::generateSlug($form_data['name'], Dish::class);
        $form_data['restaurant_id'] = Auth::id();

        $new_dish = new Dish();
        $new_dish->fill($form_data);
        $new_dish->save();

        return redirect()->route('admin.restaurants.show', $form_data['restaurant_id'])->with('success', 'Il piatto ' . $new_dish->name . ' è stato inserito correttamente');
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
    public function edit(string $id)
    {
        //
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
        //
    }
}

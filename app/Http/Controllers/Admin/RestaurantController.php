<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use App\Models\Dish;
use App\Functions\Helper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $types = Type::all();
        $method = 'POST';
        $restaurant = null;
        $submit = 'Crea';
        return view('admin.restaurants.create-edit', compact('route', 'types', 'submit', 'title', 'restaurant', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RestaurantRequest $request)
    {
        $form_data = $request->all();

        $form_data['slug'] = Helper::generateSlug($form_data['business_name'], Restaurant::class);
        $form_data['user_id'] = Auth::id();

        $new_restaurant = new Restaurant();

        $new_restaurant->fill($form_data);
        $new_restaurant->save();

        if (array_key_exists('types', $form_data)) {
            $new_restaurant->types()->attach($form_data['types']);
        }



        return redirect()->route('admin.dishes.index', $new_restaurant)->with('success', 'Il ristorante ' . $new_restaurant->business_name . ' è stato inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        $dishes = Dish::where('restaurant_id', $restaurant->id)->get();
        return view('admin.restaurants.show', compact('restaurant', 'dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        $route = route('admin.restaurants.update', $restaurant);
        $title = 'Modifica ristorante';
        $types = Type::all();
        $method = 'PUT';
        $submit = 'Aggiorna';
        return view('admin.restaurants.create-edit', compact('route', 'types', 'title', 'submit', 'restaurant', 'method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {
        $form_data = $request->all();

        if ($form_data['business_name'] !== $restaurant->business_name) {
            $form_data['slug'] = Helper::generateSlug($form_data['business_name'], Restaurant::class);
        } else {
            $form_data['slug'] = $restaurant->slug;
        }

        $restaurant->update($form_data);

        if (array_key_exists('types', $form_data)) {
            $restaurant->types()->sync($form_data['types']);
        } else {
            $restaurant->types()->detach();
        }

        return redirect()->route('admin.restaurants.index', $restaurant)->with('success', 'Il ristorante ' . $restaurant->business_name . ' è stato modificato correttamente');
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

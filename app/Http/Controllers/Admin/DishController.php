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
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::where('restaurant_id', Auth::user()->restaurant->id)->get();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Dish $dish)
    {
        $route = route('admin.dishes.store');
        $title = 'Crea un nuovo piatto';
        $dish = null;
        $method = 'POST';
        $submit = 'Crea';
        return view('admin.dishes.create-edit', compact('route', 'submit', 'title', 'method', 'dish'));
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

        if (array_key_exists('image', $form_data)) {
            $image_path = Storage::put('uploads', $form_data['image']);
            $original_name = $request->file('image')->getClientOriginalName();
            $form_data['image'] = $image_path;
            $form_data['original_image'] = $original_name;
        }

        $new_dish = new Dish();
        $new_dish->fill($form_data);
        $new_dish->save();

        return redirect()->route('admin.dishes.index')->with('success', 'Il piatto ' . $new_dish->name . ' è stato inserito correttamente');
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
    public function edit(Dish $dish)
    {
        $route = route('admin.dishes.update', $dish);
        $title = 'Modifica piatto';
        $method = 'PUT';
        $submit = 'Aggiorna';
        return view('admin.dishes.create-edit', compact('route', 'submit', 'title', 'method', 'dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DishRequest $request, Dish $dish)
    {

        $form_data = $request->all();

        if ($form_data['name'] !== $dish->name) {
            $form_data['slug'] = Helper::generateSlug($form_data['name'], Dish::class);
        } else {
            $form_data['slug'] = $dish->slug;
        }

        $form_data['available'] = $request->has('available') ? 1 : 0;


        if (array_key_exists('image', $form_data)) {
            $image_path = Storage::put('uploads', $form_data['image']);

            $original_name = $request->file('image')->getClientOriginalName();
            $form_data['image'] = $image_path;
            $form_data['original_image'] = $original_name;
        }

        $dish->update($form_data);


        return redirect()->route('admin.dishes.index', $dish)->with('success', 'Il piatto ' . $dish->name . ' è stato modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish = Dish::find($dish->id);
        if ($dish) {
            $dish->delete();
            return redirect()->route('admin.dishes.index')->with('success', 'Il piatto ' . $dish->name . ' è stato eliminato correttamente');
        }
    }
}

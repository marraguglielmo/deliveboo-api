<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Type;
use App\Functions\Helper;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $types = Type::all();

        return view('auth.register', compact('types'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'business_name' => ['required', 'string', 'max:255'],
                'types' => ['required'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'image' => ['image', 'mimes:jpg, png, webp', 'max:20480'],
                'vat_number' => ['required', 'string', 'max:11'],
                'phone_number' => ['string', 'max:15'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'address' => ['required', 'min:8', 'max:255']
            ],
            []
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $new_restaurant = new Restaurant([
            'business_name' => $request->business_name,
            'slug' => Helper::generateSlug($request->business_name, Restaurant::class),
            'types' => $request->types,
            'email' => $request->email,
            'image' => $request->image,
            'vat_number' => $request->vat_number,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        if ($request->hasFile('image')) {
            $path = Storage::put('uploads', $request->image);
            $original_name = $request->file('image')->getClientOriginalName();
            $new_restaurant->image = $path;
            $new_restaurant->original_image = $original_name;
        };


        // Salvataggio del nuovo ristorante associato all'utente
        $user->restaurant()->save($new_restaurant);

        $new_restaurant->types()->attach($request->types);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

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
use Illuminate\Validation\Rules\Password;

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
                'name' => ['required', 'string', 'min:4', 'max:50'],
                'business_name' => ['required', 'min:4', 'max:50'],
                'types' => ['required'],
                'image' => ['image', 'mimes:jpg, png, webp', 'max:20480'],
                'address' => ['required', 'min:8', 'max:255'],
                'phone_number' => ['required', 'integer', 'digits:10'],
                'vat_number' => ['required', 'regex:/^\d{11}$/', 'digits:11'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:50', 'unique:' . User::class],
                'password' => [
                    'required',
                    'confirmed',
                    Rules\Password::defaults(),
                    Password::min(8)
                        ->mixedCase() // richiede almeno una lettera maiuscola e una minuscola
                        ->numbers()   // richiede almeno un numero
                        ->symbols()   // richiede almeno un simbolo
                ],
            ],
            [
                'name.required' => 'Il campo Nome Utente è obbligatorio',
                'name.string' => 'Il campo Nome utente deve contenere delle lettere',
                'name.min' => 'Il campo Nome utente deve avere almeno :min caratteri',
                'name.max' => 'Il campo Nome utente non deve avere più di :max caratteri',

                'business_name.required' => 'Il campo Nome ristorante è obbligatorio',
                'business_name.min' => 'Il campo Nome ristorante deve avere almeno :min caratteri',
                'business_name.max' => 'Il campo Nome ristorante non deve avere più di :max caratteri',

                'types.required' => 'Il campo Tipologie è obbligatorio',

                'image.image' => 'Il file inserito non è un\'immagine',
                'image.mimes' => 'I file consentiti sono: png, jpg, jpeg, webp',
                'image.max' => 'Il file immagine non può superare i 20 MB',

                'address.required' => 'Il campo Indirizzo è obbligatorio',
                'address.min' => 'Il campo Indirizzo deve avere almeno :min caratteri',
                'address.max' => 'Il campo Indirizzo non deve avere più di :max caratteri',

                'phone_number.required' => 'Il campo Telefono è obbligatorio',
                'phone_number.integer' => 'Il campo Telefono può avere solo numeri',
                'phone_number.digits' => 'Il campo Telefono deve avere :digits numeri',

                'vat_number.required' => 'Il campo P.IVA è obbligatorio',
                'vat_number.regex' => 'Il campo P.IVA può avere solo numeri',
                'vat_number.digits' => 'Il campo P.IVA deve avere :digits numeri',

                'email.required' => 'Il campo Email è obbligatorio',
                'email.email' => 'Il campo Email deve essere un indirizzo email valido',
                'email.unique' => 'Questa email è già in uso',
                'email.lowercase' => 'Il campo Email non deve avere lettere maiuscole',
                'email.max' => 'Il campo Email non può avere più di :max caratteri',

                'password.required' => 'Il campo Password è obbligatorio',
                'password.confirmed' => 'La conferma della Password non corrisponde',
                'password.min' => 'Il campo Password deve avere almeno :min caratteri',
                'password.mixedCase' => 'Il campo Password deve contenere almeno una lettera maiuscola e una minuscola',
                'password.numbers' => 'Il campo Password deve contenere almeno un numero',
                'password.symbols' => 'Il campo Password deve contenere almeno un simbolo',

            ]
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

    public function update(Request $request): RedirectResponse
{
    // Validazione dei campi
    $request->validate(
        [
            'image' => ['required', 'image', 'mimes:jpg,png,webp', 'max:20480'],
            'id' => ['required']
        ],
        [
            'image.required' => 'Il campo Immagine è obbligatorio',
            'image.image' => 'Il file inserito non è un\'immagine',
            'image.mimes' => 'I file consentiti sono: png, jpg, jpeg, webp',
            'image.max' => 'Il file immagine non può superare i 20 MB',
        ]
    );

    // Recupera l'id dal parametro della richiesta
    $id = $request->input('id');

    // Recupera il ristorante esistente usando l'id
    $restaurant = Restaurant::findOrFail($id);

    // Aggiornamento dell'immagine
    if ($request->hasFile('image')) {
        // Rimuovi l'immagine precedente se esiste
        if ($restaurant->image) {
            Storage::delete($restaurant->image);
        }

        // Salva la nuova immagine
        $path = Storage::put('uploads', $request->image);
        $original_name = $request->file('image')->getClientOriginalName();

        $restaurant->image = $path;
        $restaurant->original_image = $original_name;
    }

    // Salva il ristorante aggiornato
    $restaurant->save();

    // Reindirizza l'utente a una pagina appropriata
    return redirect()->back()->with('success', 'Immagine aggiornata con successo');
}

}

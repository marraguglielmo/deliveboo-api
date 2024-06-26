<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:255',
            'price' => 'required|min:3|max:10',
            'description' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,webp|max:20480'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo mamma è obbligatorio',
            'name.min' => 'Il campo Nome non deve avere meno di :min caratteri',
            'name.max' => 'Il campo Nome non deve avere più di :max caratteri',

            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.min' => 'Il campo prezzo non deve avere meno di :min caratteri',
            'price.max' => 'Il campo prezzo non deve avere più di :max caratteri',

            'description.required' => 'Il campo descrizione è obbligatorio',

            'image.image' => 'Il file selezionato non è un\'immagine',
            'image.mimes' => 'I formati consentiti sono: png, jpg, jpeg, webp',
            'image.max' => 'Il file non può superare i 20 MB'
        ];
    }
}

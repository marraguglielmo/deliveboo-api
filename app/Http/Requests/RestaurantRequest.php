<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'business_name' => 'required|min:2|max:255',
            'email' => 'required|min:2|max:255',
            'phone_number' => 'required|min:11|max:11',
            'address' => 'required|min:2|max:255',
        ];
    }

    public function messages()
    {
        return [
            'business_name.required' => 'Il campo Nome è obbligatorio',
            'business_name.min' => 'Il campo Nome non deve avere meno di :min caratteri',
            'business_name.max' => 'Il campo Nome non deve avere più di :max caratteri',

            'email.required' => 'Il campo Email è obbligatorio',
            'email.min' => 'Il campo Email non deve avere meno di :min caratteri',
            'email.max' => 'Il campo Email non deve avere più di :max caratteri',

            'phone_number.required' => 'Il campo Telefono è obbligatorio',
            'phone_number.min' => 'Il campo Telefono non deve avere meno di :min caratteri',
            'phone_number.max' => 'Il campo Telefono non deve avere più di :max caratteri',

            'address.required' => 'Il campo Indirizzo è obbligatorio',
            'address.min' => 'Il campo Indirizzo non deve avere meno di :min caratteri',
            'address.max' => 'Il campo Indirizzo non deve avere più di :max caratteri',
        ];
    }
}

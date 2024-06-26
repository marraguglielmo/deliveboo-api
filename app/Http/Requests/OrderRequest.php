<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|min:4|max:50',
            'surname' => 'required|min:4|max:50',
            'email' => 'required|max:50',
            'phone_number' => 'required|integer|digits:11',
            'address' => 'required|min:8|max:100'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo Nome è obbligatorio',
            'name.min' => 'Il campo Nome non deve avere meno di :min caratteri',
            'name.max' => 'Il campo Nome non deve avere più di :max caratteri',

            'surname' => 'Il campo Cognome è obbligatorio',
            'surname.min' => 'Il campo Cognome non deve avere meno di :min caratteri',
            'surname.max' => 'Il campo Cognome non deve avere più di :max caratteri',

            'email' => 'Il campo Email è obbligatorio',
            'email.max' => 'Il campo Email non deve avere più di :max caratteri',

            'phone_number' => 'Il campo Telefono è obbligatorio',
            'phone_number.integer' => 'Il campo Telefono non può contenere lettere',
            'phone_number.digits' => 'il campo Telefono deve avere :digits numeri',

            'address' => 'Il campo Indirizzo è obbligatorio',
            'address.min' => 'Il campo Indirizzo non deve avere meno di :min caratteri',
            'address.max' => 'Il campo Indirizzo non deve avere più di :max caratteri',
        ];
    }
}

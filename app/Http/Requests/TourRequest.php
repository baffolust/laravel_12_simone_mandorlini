<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:50',
            'description' => 'required|max:500|min:100',
            'country' => 'required|max:30',
        ];
    }

    public function messages(){

    
        return [
            'name.required' => 'Il nome del tour è obbligatorio',
            'name.min' => 'Il nome deve essere lungo minimo 5 caratteri',
            'description.required' => 'La descrizione del tour è obbligatoria',
            'description.min' => 'La descrizione del tour deve essere lunga almeno 5 caratteri',
            'description.max' => 'La descrizione del tour può essere lunga al massimo 500 caratteri',
            'country.required' => 'La nazione del tour è obbligatoria',
            'country.max' => 'La nazione del tour può essere lunga al massimo 500 caratteri',


        ];

    }
}

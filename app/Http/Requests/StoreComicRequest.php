<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> 'required|string|max:75',
            'description'=> 'string|',
            'series'=> 'string|max:75',
            'type'=> 'string|max:75',
            'price'=> 'string|max:75',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=> 'Il titolo non può essere vuoto',
            'title.string'=> 'Il titolo deve essere una stringa',
            'title.max'=> 'Il titolo non può essere più lungo di 75 caratteri',
            'description.string'=> 'La descrizione deve essere una stringa',
            'series.string'=> 'La serie deve essere una stringa',
            'type.string'=> 'Il tipo deve essere una stringa',
            'price.string'=> 'Il prezzo deve essere una stringa',
        ];
    }
}

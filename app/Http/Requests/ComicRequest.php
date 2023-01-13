<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:75|min:2',
            'thumb' => 'required|min:2',
            'price' => 'required|numeric|between:0,999.99',
            'sale_date' => 'date'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',

            'thumb.required' => 'L \'url dell\'immagine è obbligatoria',
            'thumb.min' => 'L \'url dell\'immagine deve avere almeno :min caratteri',

            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve contenere solo cifre',
            'price.between' => 'Il prezzo dev\'essere compreso tra :between €',

            'sale_date.date' => 'La data di vendita dev\'essere in formato (YY:M:d)'
        ];

    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'description' => 'nullable',
            'image' => 'required',
            'price' => 'required|min:2|max:10',
            'series' => 'required|min:5|max:50',
            'sale_date' => 'required|max:10',
            'type' => 'required|min:2|max:30'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'Il titolo è richiesto e deve essere lungo almeno 5 caratteri',
            'title.min' => 'Il titolo deve essere lungo almeno 5 caratteri',
            'title.max' => 'Il titolo non deve superare i 50 caratteri',
            'description.required' => 'La descrizione è richiesta',
            'image.required' => "L'immagine è richiesta",
            'price.require' => 'Il prezzo è richiesto e deve essere di almeno 2 cifre',
            'price.min' => 'Il prezzo deve essere lungo almeno 2 cifre',
            'price.max' => 'Il prezzo non deve superare le 10 cifre',
            'series.required' => 'La serie è richiesta e deve essere lunga almeno 5 caratteri',
            'series.min' => 'La serie deve essere lunga almeno 5 caratteri',
            'series.max' => 'La serie non deve superare i 50 caratteri',
            'sale_date' => 'La data di uscita è richiesta e non deve superare le 10 cifre',
            'sale_date.max' => 'La data di uscita non deve superare le 10 cifre',
            'type' => 'La tipologia è richiesta e deve essere una tra le 2 opzioni',
        ];
    }
}

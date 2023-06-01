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
            'title' => 'required|min:5|max:50',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required|min:2|max:10',
            'series' => 'required|min:5|max:50',
            'sale_date' => 'required|max:10',
            'type' => 'required|min:2|max:30'
        ];
    }
}

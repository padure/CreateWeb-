<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePortofoliuRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'lg'       => 'required',
            'name'       => 'required',
            'subtitle'   => 'required',
            'description'=> 'required',
            'date'       => 'required',
            'client'     => 'required',
            'categorie'  => 'required',
            'url'        => 'required|image|mimes:jpeg,png,jpg',
            'thumbnail'  => 'required|image|mimes:jpeg,png,jpg',
        ];
    }
}

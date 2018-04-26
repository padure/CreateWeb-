<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAbautsRequest extends FormRequest
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
            'nr'          => 'required',
            'language'    => 'required',
            'date'        => 'required',
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAccessory extends FormRequest
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
            
            'title' => 'required',
            'city' => 'required',
            'description' => 'required',
            'price' => 'required',
            'negotiable' => 'required',
            'condition' => 'required',
            'category' => 'required',
            'image' => 'required'

        ];
    }
}

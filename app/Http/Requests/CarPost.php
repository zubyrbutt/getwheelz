<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarPost extends FormRequest
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
            'city' => 'required',
            
            'car_info'  => 'required',
            'registration_city'  => 'required',
            'mileage'  => 'required',
            'color'  => 'required',
            'engine'  => 'required',
            'transmission' => 'required',
            'assembly' => 'required',
            'image' => 'required',
            'model' => 'required',
            'description' => 'required',
            'price' => 'required',
            

        ];
    }
}

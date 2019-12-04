<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentalPostRequest extends FormRequest
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
            
            'car_type' => 'required',
            'city' => 'required',
            'driver' => 'required',
            'starting_date' => 'required',
            'ending_date' => 'required'


        ];
    }
}

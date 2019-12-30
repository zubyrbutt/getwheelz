<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAuctionRequest extends FormRequest
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
            'grade' => 'required',
            'chassis_no'=> 'required',
            'transmission' => 'required',
            'color' => 'required',
            'auction' => 'required',
            'mileage' => 'required',
            'image' => 'required',
        ];
    }
}

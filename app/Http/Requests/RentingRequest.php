<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentingRequest extends FormRequest
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
            'r_name' => 'required|max:255',
            'r_email' => 'required|email|max:255',
            'r_date' => 'required|max:255',
            'r_message' => 'required'
        ];
    }
}

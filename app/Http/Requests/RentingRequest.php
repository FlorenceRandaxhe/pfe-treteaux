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
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'message' => 'required',
            'my_name'   => 'honeypot',
            'my_time'   => 'required|honeytime:5'

        ];
    }

    protected function getRedirectUrl()
    {
        $url = $this->redirector->getUrlGenerator();
        return $url->previous() . '#form';
    }

}

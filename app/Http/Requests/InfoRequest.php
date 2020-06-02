<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'email' => 'required|email',
            'lastName' => 'required',
            'firstName' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'town' => 'required',
            'cp' => 'required|numeric',
            'my_name'   => 'honeypot',
            'my_time'   => 'required|honeytime:5'

        ];
    }

    protected function getRedirectUrl()
    {
        $url = $this->redirector->getUrlGenerator();
        return $url->previous();
    }

    public function attributes()
    {
        return [
            'firstName' => 'Le prénom',
            'lastName' => 'Le nom',
            'town' => 'La ville',
            'cp' => 'Le code postal',
        ];
    }
}

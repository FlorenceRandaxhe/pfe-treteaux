<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterNewsletterRequest extends FormRequest
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
            'nlf_email' => 'required|email',
            'my_name'   => 'honeypot',
            'my_time'   => 'required|honeytime:5'

        ];
    }

    public function messages()
    {
        return [
            'nlf_email.required' => 'Ce champs est obligatoire',
            'nlf_email.email'  => 'Veulliez entrer une adresse email valide',
        ];
    }

    protected function getRedirectUrl()
    {
        $url = $this->redirector->getUrlGenerator();
        return $url->previous() . '#nlf_email';
    }
}

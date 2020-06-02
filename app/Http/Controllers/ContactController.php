<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Form;
use Newsletter;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(ContactRequest $request)
    {
        Form::create([
            'form' => 'contact',
            'email' => $request->email,
            'data' => json_encode([[
                'key' => '',
                'layout' => 'contactlayout',
                'attributes' => $request->except(['my_time', 'my_name', '_token'])
            ]])
        ]);

        if($request->newsl === true){
            Newsletter::subscribe($request->email);
        }

        Mail::to(env('CONTACT_EMAIL'))->send(new ContactMail($request));
        return redirect()->to(url()->previous() . '#contact')->with('success', true);
    }
}

<?php

namespace App\Http\Controllers;

use App\Form;
use App\Mail\RentingMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\RentingRequest;

class RentingController extends Controller
{
    public function index()
    {
        return view('pages.renting');
    }

    public function submit(RentingRequest $request)
    {
        Form::create([
            'form' => 'location',
            'email' => $request->email,
            'data' => json_encode([[
                'key' => '',
                'layout' => 'rentinglayout',
                'attributes' => $request->except(['my_time', 'my_name', '_token'])
            ]])
        ]);

        Mail::to(env('CONTACT_EMAIL'))->send(new RentingMail($request));
        return redirect()->to(url()->previous() . '#form')->with('success', true);
    }
}

<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Requests\InfoRequest;

class InfoController extends Controller
{
    public function info(Event $event, Request $request)
    {
        if (!$request->session()->exists('category')) {
            return redirect()->route('booking', ['event' => $event]);
        }

        return view('checkout.info', [
            'event' => $event
        ]);
    }

    public function validateInfo(Event $event, InfoRequest $request)
    {
        session(['client' => $request->except(['my_time', 'my_name', '_token'])]);

        return redirect()->route('payment', [
            'event' => $event
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Event;
use Illuminate\Http\Request;


class SeatsController extends Controller
{
    public function seat(Event $event, Request $request)
    {
        if (!$request->session()->exists('category')) {
            return redirect()->route('booking', ['event' => $event]);
        }
        if($event->seating != 0){
            return redirect()->to(url()->previous());
        }
        return view('checkout.seats', [
            'event' => $event
        ]);
    }

    public function chooseSeats(Event $event, Request $request)
    {
        session(['seat'=> $request->seats]);

        $arr = [];
        foreach ($request->seats as $key => $value) {
            $sum = intval($request->seats[$key]);
            for ($i=1; $i <= $sum; $i++) {
                array_push($arr, Str::replaceFirst('seat_','', $key));
            };
            session(['select' => $arr]);
        }
        return redirect()->route('cart', [
            'event' => $event
        ]);
    }
}

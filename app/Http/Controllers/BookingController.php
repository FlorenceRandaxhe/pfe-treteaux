<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function category(Event $event, Request $request)
    {
        $filtered = Arr::where($event->seats, function ($value, $key) {
            return $value == '0';
        });

        return view('booking.category', [
            'event' => $event,
            'seatsLeft' => count($filtered)
        ]);
    }

    public function chooseCategory(Event $event, Request $request)
    {
        session([
            'category' => [
                'adulte' => intval($request->adulte),
                'etudiant' => intval($request->etudiant),
                'enfant' => intval($request->enfant),
                'senior' => intval($request->senior),
            ]
        ]);

        $flattened = Arr::flatten(session('category'));
        $sum = array_sum($flattened);
        session(['sum' => $sum]);
        session(['seat' => []]);

        if ($sum === 0) {
            return redirect()->to(url()->previous() . '#main')->with('status', 'Veuillez sélectionner au moins une place');
        }

        if($event->seating === 0){
            return redirect()->route('cart', ['event' => $event]);
        }

        return redirect()->route('seating', ['event' => $event]);

    }

    public function seat(Event $event, Request $request)
    {
        if($event->seating === 0){
            return redirect()->to(url()->previous());
        }

        return view('booking.seats', [
            'event' => $event
        ]);
    }


    public function chooseSeats(Event $event, Request $request)
    {
        session(['seat'=> $request->seats]);

        return redirect()->route('cart', [
            'event' => $event
        ]);

        //$result = array_merge($event->seats, $request->seats);
        //$event->update(['seats' => $result]);

    }

    public function cart(Event $event, Request $request)
    {
        $arr = [];
        foreach (session('category') as $key => $value) {
            $arr[] = $event->prices[$key] * $value;
        }
        $total = array_sum($arr);
        session(['total' => $total]);

        return view('booking.cart', [
            'event' => $event
        ]);
    }

    public function emptyCart(Request $request, Event $event){
        $request->session()->flush();

        return redirect()->route('booking', [
            'event' => $event
        ]);

    }

    public function payment(Event $event, Request $request)
    {
       // return $request->session()->all();
        return view('booking.payment', [
            'event' => $event
        ]);
    }
}

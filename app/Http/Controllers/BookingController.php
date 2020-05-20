<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function category(Event $event, Request $request){

        return view('booking.category', [
            'event' => $event
        ]);
    }

    public function chooseCategory(Event $event, Request $request){

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
        session(['seat' => []]);

        if ($sum === 0) {
            return redirect()->to(url()->previous() . '#main')->with('status', 'Veuillez sélectionner au moins une place');
        }

        if($event->seating === 0){
            return redirect()->route('confirm', ['event' => $event]);
        }

        return redirect()->route('seating', ['event' => $event]);

    }

    public function seat(Event $event, Request $request){

        $flattened = Arr::flatten(session('category'));
        $sum = array_sum($flattened);
        session(['sum' => $sum]);


        return view('booking.seats', [
            'sum' => $sum,
            'event' => $event
        ]);
    }


    public function chooseSeats(Event $event){

        //$request->session()->push('seat',  $request->seats);

        session(['seat'=> $request->seats]);

        $flattened = Arr::flatten(session('category'));
        $sum = array_sum($flattened);

        return redirect()->route('confirm', ['event' => $event]);


        //$result = array_merge($event->seats, $request->seats);
        //$event->update(['seats' => $result]);

    }

    public function confirm(Event $event){
        //return $request->session()->all();
        $arr = [];
        foreach (session('category') as $key => $value) {
            $arr[] = $event->prices[$key] * $value;
        }
        $sum = array_sum($arr);

        return view('booking.confirm', [
            'sum' => $sum,
            'event' => $event
        ]);
    }
}

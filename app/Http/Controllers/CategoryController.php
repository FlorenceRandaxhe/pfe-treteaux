<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Event;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Event $event, Request $request)
    {
        if ($this->checkSeatsLeft($event) == 0 || $event->date <= now()) {
            return redirect()->route('singleEvent', ['season' => $event->season, 'event' => $event]);
        }

        return view('checkout.category', [
            'event' => $event,
            'seatsLeft' => $this->checkSeatsLeft($event)
        ]);
    }

    public function chooseCategory(Event $event, Request $request)
    {
        $this->saveSelectedSeat($request);
        $this->getTotalSeat($request);

        session(['sum' => $this->getTotalSeat($request)]);
        session(['seat' => []]);

        if ($this->getTotalSeat($request) === 0) {
            return redirect()->to(url()->previous() . '#main');
        }

        if($event->seating != 0){
            return redirect()->route('cart', ['event' => $event]);
        }
        return redirect()->route('seating', ['event' => $event]);
    }

    protected function checkSeatsLeft($event)
    {
        if ($event->seating == 0) {
            $filtered = Arr::where($event->seats, function ($value, $key) {
                return $value == 0;
            });
            $filtered = count($filtered);
        } elseif ($event->seating == 1){
            $filtered = $event->seats;
        } elseif ($event->seating == 2){
            $filtered = $event->seats;
        }

        return $filtered;
    }

    protected function saveSelectedSeat($request)
    {
        $filtered = Arr::where($request->all(), function ($value, $key) {
            return $value !== null && $key !== '_token';
        });

        $arr = [];
        foreach ($filtered as $key => $value) {
            $sum = intval($filtered[$key]);
            for ($i=1; $i <= $sum; $i++) {
                array_push($arr, $key);
            };
            session(['category' => $arr]);
        }
    }

    protected function getTotalSeat($request)
    {
        return intval($request->adulte) + intval($request->etudiant) + intval($request->enfant) + intval($request->senior);
    }
}

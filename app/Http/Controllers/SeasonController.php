<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Season;
use App\Event;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function __invoke(Season $season)
    {
        return view('pages.event', [
            'season' => $season,
            'allSeasons' => Season::all()->where('year', '!=', $season->year),
        ]);
    }

    public function show(Season $season, Event $event)
    {
        if(!$event) return abort(404);
        return view('pages.singleEvent', [
            'event' => $event,
            'seatsLeft' => $this->checkSeatsLeft($event)
        ]);
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
}

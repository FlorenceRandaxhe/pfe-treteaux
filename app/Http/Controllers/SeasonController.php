<?php

namespace App\Http\Controllers;

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
            'event' => $event
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Season;
use App\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $latestSeason = Season::where('archived', '=', false)->latest()->first();
        $events = $latestSeason->events()->limit(3)->get();
        $teams = Team::all();

        return view('pages.about', [
            'events' => $events,
            'teams' => $teams,
        ]);

    }
}

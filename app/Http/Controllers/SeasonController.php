<?php

namespace App\Http\Controllers;

use App\Season;
use App\Post;
use App\Event;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function __invoke(Season $season)
    {
        //$latestSeason = Season::latestSeason()->get();
        //$latestSeason->load('events');

        return view('pages.event', [
            'season' => $season,
            'allSeasons' => Season::all()->where('year', '!=', $season->year),
        ]);
    }

    public function show(Season $season, Event $event)
    {
        return view('pages.singleEvent', [
            'event' => $event
        ]);
    }
}

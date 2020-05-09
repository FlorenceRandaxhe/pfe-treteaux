<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;

class SubscriptionController extends Controller
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

        return view('pages.subscription', [
            'events' => $events,
        ]);
    }
}

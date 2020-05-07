<?php

namespace App\Http\Controllers;

use App\Season;
use App\Post;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function __invoke(Season $season)
    {
        $latestSeason = Season::where('archived', '=', false)->latest()->first();
        $latestSeason->load('events');
        $allSeasons = Season::all()->where('year', '!=', $season->year);
        $posts = Post::published()->limit(3)->get();

        return view('pages.event', [
            'latestSeason' => $latestSeason,
            'season' => $season,
            'allSeasons' => $allSeasons,
            'posts' => $posts
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Season;
use App\Post;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function __invoke(Season $season)
    {
        $season->load('events');
        $posts = Post::published()->limit(3)->get();

        return view('pages.event', [
            'season' => $season,
            'posts' => $posts
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Season;
use App\Post;
use Illuminate\Http\Request;

class RentingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $season = Season::where('archived', '=', false)->latest()->first();
        $posts = Post::published()->limit(3)->get();

        return view('pages.renting', [
            'season' => $season,
            'posts' => $posts
        ]);
    }
}

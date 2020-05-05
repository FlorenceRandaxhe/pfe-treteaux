<?php

namespace App\Http\Controllers;

use App\Post;
use App\Season;
use App\Event;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __invoke(Request $request)
    {
        $posts = Post::published()->paginate(8);
        $season = Season::where('archived', '=', false)->latest()->first();
        $events = $season->events()->limit(3)->get();
        //$featured = Event::featured()->get();

        return view('pages.post', [
            'posts' => $posts,
            'events' => $events,
            'season' => $season
        ]);

    }

}

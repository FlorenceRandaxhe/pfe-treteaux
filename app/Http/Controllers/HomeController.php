<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Season;
use App\Event;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Post::published()->limit(3)->get();
        $events = Event::limit(3)->get();
        $featured = Event::featured()->get();

        return view('pages.home', [
            'posts' => $posts,
            'events' => $events,
            'featured' => $featured
        ]);

    }
}

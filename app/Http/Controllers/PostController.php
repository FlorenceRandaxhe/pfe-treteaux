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
        $latestSeason = Season::where('archived', '=', false)->latest()->first();
        $events = $latestSeason->events()->limit(3)->get();

        return view('pages.post', [
            'posts' => $posts,
            'events' => $events,
            'latestSeason' => $latestSeason
        ]);

    }

    public function show(Post $post){

        $latestSeason = Season::where('archived', '=', false)->latest()->first();
        $events = $latestSeason->events()->limit(3)->get();

        return view('pages.singleNews', [
            'post' => $post,
            'events' => $events,
            'latestSeason' => $latestSeason
        ]);
    }

}

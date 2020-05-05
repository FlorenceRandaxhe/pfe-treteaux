<?php

namespace App\Http\Controllers;

use App\Media;
use App\Post;
use App\Season;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __invoke(Request $request)
    {
        $posts = Post::published()->limit(3)->get();
        $medias = Media::paginate(3);
        $season = Season::where('archived', '=', false)->latest()->first();

        return view('pages.press', [
            'posts' => $posts,
            'medias' => $medias,
            'season' => $season
        ]);

    }
}

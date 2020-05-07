<?php

namespace App\Http\Controllers;

use App\Resto;
use App\Season;
use App\Post;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function __invoke(Request $request)
    {
        $posts = Post::published()->limit(3)->get();
        $restos = Resto::all();
        $latestSeason = Season::where('archived', '=', false)->latest()->first();

        return view('pages.resto', [
            'posts' => $posts,
            'restos' => $restos,
            'latestSeason' => $latestSeason
        ]);

    }
}

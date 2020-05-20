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
        return view('pages.press', [
            'medias' => Media::paginate(3)
        ]);
    }
}

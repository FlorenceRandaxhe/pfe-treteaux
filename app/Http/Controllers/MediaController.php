<?php

namespace App\Http\Controllers;

use App\Media;
use App\Season;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __invoke()
    {

        $press = Season::season()->get();
        $press->load(['events' => function ($query) {
            $query->where('pressRelease', '!=', null);
        }]);

        //return $press;
        return view('pages.press', [
            'medias' => Media::paginate(3),
            'press' => $press

        ]);
    }
}

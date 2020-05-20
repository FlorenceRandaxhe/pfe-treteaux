<?php

namespace App\Http\Controllers;

use App\Season;
use App\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages.about', [
            'teams' => Team::ordered()->get()
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('pages.about', [
            'teams' => Team::ordered()->get()
        ]);
    }
}
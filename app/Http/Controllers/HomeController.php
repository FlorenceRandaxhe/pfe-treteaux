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
        return view('pages.home', [
            'featured' => Event::featured()->get()
        ]);
    }
}

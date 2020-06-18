<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Season;
use Illuminate\Database\Eloquent\Builder;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('pages.home', [
            'featured' => Event::whereHas('season',  function (Builder $query) {
                $query->where('archived', false);
            })->featured()->get()
        ]);
    }
}

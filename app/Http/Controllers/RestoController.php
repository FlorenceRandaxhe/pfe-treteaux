<?php

namespace App\Http\Controllers;

use App\Resto;
use App\Event;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function __invoke(Request $request)
    {

        return view('pages.resto', [
            'restos' => Resto::ordered()->get(),
            'events' => Event::resto()->get()
        ]);

    }
}

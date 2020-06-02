<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;

class SubscriptionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('pages.subscription');
    }
}

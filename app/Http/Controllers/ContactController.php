<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Season;
use App\Event;

class ContactController extends Controller
{
    public function index()
    {
        $latestSeason = Season::where('archived', '=', false)->latest()->first();
        $events = $latestSeason->events()->limit(3)->get();

        return view('pages.contact', [
            'events' => $events,
        ]);
    }

    public function submit(ContactRequest $request)
    {

        return redirect()->to(url()->previous() . '#contact')->with('success', true);
    }
}

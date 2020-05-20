<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Season;

class EventsComposer
{
    public $latestSeason;

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Season $latestSeason)
    {
        $this->latestSeason = $latestSeason;
        $this->event = Route::currentRouteName();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('events', $this->getEvents());
    }

    protected function getEvents(){

        $latestSeason =  Season::where('archived', '=', false)->latest()->first();

        if ($this->event === 'singleEvent') {

            $data = Route::current()->name('singleEvent')->event;
            $events = $latestSeason->events()
                ->where('type_id', '=', $data->type_id)
                ->where('slug', '!=', $data->slug)
                ->limit(3)->get();

            return $events;
        }

        $events = $latestSeason->events()->limit(3)->get();


        return $events;
    }
}
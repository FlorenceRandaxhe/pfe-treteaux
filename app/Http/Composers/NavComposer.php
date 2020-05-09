<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use App\Season;

class NavComposer
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

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('latestSeason', $this->getSeason());
    }

    protected function getSeason(){
        $latestSeason =  Season::where('archived', '=', false)->latest()->first();

        return $latestSeason->year;
    }
}
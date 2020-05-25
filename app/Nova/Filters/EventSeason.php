<?php

namespace App\Nova\Filters;

use App\Season;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class EventSeason extends Filter
{

    /**
     * The displayable name of the filter.
     *
     * @var string
     */
    public $name = 'Filtrer par saison';

    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        return $query->where('season_id', $value);
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return Season::pluck('id', 'year')->toArray();
    }

}

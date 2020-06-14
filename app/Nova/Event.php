<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Nova\Panels\EventPresentation;
use App\Nova\Panels\EventDetails;
use App\Nova\Panels\EventDistri;
use App\Nova\Panels\EventPress;
use App\Nova\Panels\EventGallery;
use App\Nova\Panels\EventSeat;
use Treteaux\SeatPicker\SeatPicker;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Epartment\NovaDependencyContainer\HasDependencies;
use Illuminate\Support\Arr;


class Event extends Resource
{
    use HasDependencies;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Event::class;

    public static $group = 'Agenda';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'slug'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            new EventPresentation('Présentation du spectacle'),
            new EventDetails('Détails & information pratiques'),
            new EventDistri('Distribution'),
            new EventPress('Presse'),
            new EventGallery('Gallerie'),
            new EventSeat('Communiqué de presse'),
            new Panel('Placement', $this->seatsFileds()),
        ];

    }

    protected function seatsFileds()
    {
        return [
            NovaDependencyContainer::make([
                Text::make('Place(s) restante(s) - placement libre (321 places)', 'seats')
                    ->default(321)
                    ->hideFromIndex()
            ])->dependsOn('seating', 1),

            NovaDependencyContainer::make([
                Text::make('Place(s) restante(s) - configuration debout (600 places)', 'seats')
                    ->default(600)
                    ->hideFromIndex()
            ])->dependsOn('seating', 2),

            NovaDependencyContainer::make([
                SeatPicker::make('Placement', 'seats')
                    ->hideFromIndex()
                    ->stacked()
            ])->dependsOn('seating', 0)

        ];
    }
    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function label()
    {
        return 'Spectacles';
    }

    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function singularLabel()
    {
        return 'Spectacle';
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\EventSeason
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}

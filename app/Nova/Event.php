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
                    ->readonly()
                    ->onlyOnDetail()
                    ->hideFromIndex()
            ])->dependsOn('seating', 1)
            ->onlyOnDetail(),


            NovaDependencyContainer::make([
                Text::make('Place(s) restante(s) - configuration debout (600 places)', 'seats')
                    ->readonly()
                    ->onlyOnDetail()
                    ->hideFromIndex()
            ])->dependsOn('seating', 2)
            ->onlyOnDetail(),

            NovaDependencyContainer::make([
                Text::make('Place(s) restante(s) sur 321', function () {
                    if ($this->seating == 0) {
                        $filtered = Arr::where($this->seats, function ($value, $key) {
                            return $value == 0;
                        });
                        $filtered = count($filtered);
                        return $filtered;
                    }
                }),
                SeatPicker::make('Placement', 'seats')
                    ->readonly()
                    ->onlyOnDetail()
                    ->hideFromIndex()
                    ->stacked(),
            ])->dependsOn('seating', 0)
            ->onlyOnDetail()
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

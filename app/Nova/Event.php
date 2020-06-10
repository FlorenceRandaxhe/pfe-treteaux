<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Nova\Panels\EventPresentation;
use App\Nova\Panels\EventDetails;
use App\Nova\Panels\EventDistri;
use App\Nova\Panels\EventPress;
use App\Nova\Panels\EventGallery;
use App\Nova\Panels\EventSeat;

class Event extends Resource
{
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
            new Panel('Communiqué de presse', $this->pressReleaseFields()),
            new EventSeat('Plan de la salle'),
        ];
    }


    protected function pressReleaseFields()
    {
        return [
            File::make('Communiqué de presse', 'pressRelease')
                ->help('Les communiqués de presse des spectacles sont disponible sur la page presse et média du site'),
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

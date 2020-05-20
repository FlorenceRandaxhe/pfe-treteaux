<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Season extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Season::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'year';

    public static $group = 'Agenda';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'year'
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
            ID::make()->sortable(),
            Text::make('Saison', 'year')
                ->rules('required', 'max:255')
                ->creationRules('unique:seasons,year')
                ->updateRules('unique:seasons,year,{{resourceId}}')
                ->help('Il ne peut contenir que des caractères simples (lettre de a-z, chiffres, pas d\'espaces, d\'accents ou autres) Par exemple, <strong>2019-2020</strong>'),

            Boolean::make('Saison archivée', 'archived')
                ->hideFromIndex()
                ->help('Lorqu\'une saison est terminée, marquez la comme archivée'),

            HasMany::make('Events'),
        ];
    }

    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function label()
    {
        return 'Saisons';
    }

    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function singularLabel()
    {
        return 'Saison';
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
        return [];
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

<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Http\Requests\NovaRequest;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

class Resto extends Resource
{
    use HasSortableRows;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Resto::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static $group = 'Les Tréteaux';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name'
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

            Text::make('Nom', 'name')
                ->rules('required'),

            Markdown::make('Menu', 'menu')
                ->hideFromIndex()
                ->rules('required'),

            Number::make('Prix', 'price')
                ->hideFromIndex()
                ->rules('required'),

            Text::make('Site du restaurant', 'url')
                ->hideFromIndex()
                ->help('N\'oubliez pas de rajouter <strong>http://</strong> devant votre lien. Exemple: <strong>http://</strong>www.google.be')
                ->rules('required'),

            Number::make('Distance', 'distance')
                ->hideFromIndex()
                ->rules('required')
                ->help('Une approximation du temps à pied entre le restaurant et la salle des Tréteaux'),

            $this->addressFields()

        ];
    }

    protected function addressFields()
    {
    return $this->merge([
        Place::make('Address', 'address')->hideFromIndex()
            ->rules('required'),

        Text::make('Latitude', 'latitude')->hideFromIndex()
            ->rules('required'),

        Text::make('Longitude', 'longitude')->hideFromIndex()
            ->rules('required'),

    ]);
    }

    public static function label()
    {
        return 'Restaurants';
    }

    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function singularLabel()
    {
        return 'Restaurant';
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

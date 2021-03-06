<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\KeyValue;
use App\Nova\Metrics\OrderCount;
use App\Nova\Metrics\OrderPerDay;
use App\Event;

class Order extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Order::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    public static $group = 'Admin';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            BelongsTo::make('Event'),

            Text::make('Email', 'email')->rules('email'),

            Date::make('Date de la réservation', 'orderDate')->format('DD-MM-YYYY'),

            Currency::make('Total', 'total')->currency('EUR'),

            KeyValue::make('Info sur le client', 'clientInfo')
                ->default(function ($request) {
                    return [
                        'email' => '',
                        'firstName' => '',
                        'lastName' => '',
                        'phone' => '',
                        'address' => '',
                        'town' => '',
                        'cp' => '',
                    ];
                })->disableEditingKeys()
                ->disableAddingRows()
                ->disableDeletingRows()
                ->rules('json'),

            KeyValue::make('Info sur la commande', 'order')
                ->keyLabel('N° de siège')
                ->valueLabel('Categorie')
                ->rules('json'),
        ];
    }

    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function label()
    {
        return 'Réservations';
    }

    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function singularLabel()
    {
        return 'Réservation';
    }
    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            (new OrderCount)->width('1/2'),
            (new OrderPerDay)->width('1/2')
        ];
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
            new Filters\OrderFilter
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

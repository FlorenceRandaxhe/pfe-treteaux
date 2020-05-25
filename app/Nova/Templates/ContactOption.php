<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaPage\Pages\Template;
use Laravel\Nova\Panel;


class ContactOption extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Adresse', 'address')
                ->rules('required'),

            Text::make('Numéro de téléphone', 'phone')
                ->rules('required'),

            Text::make('Adresse email', 'email')
                ->rules('required'),


            new Panel('Carte', $this->mapFields()),

        ];
    }

    protected function mapFields()
    {
        return [
            Text::make('Latitude', 'lat')->hideFromIndex()
                ->rules('required'),

            Text::make('Longitude', 'lng')->hideFromIndex()
                ->rules('required'),

        ];
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
}
<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaPage\Pages\Template;
use App\Nova\Templates\Panels\MetaPanel;

class Contact extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            new Panel('Intro', $this->heroFields()),
            new Panel('Address', $this->mapFields()),
            new MetaPanel('Données meta')
        ];
    }

    protected function heroFields()
    {
        return [
            Textarea::make('Introduction', 'heroIntro')
                ->rules('required'),
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
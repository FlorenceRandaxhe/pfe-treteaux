<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaPage\Pages\Template;

class MetaOption extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Description de la page', 'meta_description')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Description de partage', 'meta_og_description')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Description de partage de twitter', 'meta_twitter_description')
                ->rules('required')
                ->hideFromIndex(),
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

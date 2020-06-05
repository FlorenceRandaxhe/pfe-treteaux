<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Whitecube\NovaPage\Pages\Template;
use App\Nova\Templates\Panels\MetaPanel;

class Legal extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Markdown::make('Contenu', 'content'),
            new MetaPanel('Données meta')
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
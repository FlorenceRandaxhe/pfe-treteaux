<?php

namespace App\Nova\Templates;

use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Template;
use App\Nova\Templates\Panels\MetaPanel;

class Post extends Template {

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
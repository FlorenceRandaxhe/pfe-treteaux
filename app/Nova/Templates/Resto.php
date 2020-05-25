<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Whitecube\NovaPage\Pages\Template;
use App\Nova\Templates\Panels\MetaPanel;

class Resto extends Template {

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
            new Panel('Restaurant', $this->restoFields()),
            new Panel('Contact', $this->contactFields()),
            new MetaPanel('Données meta')
        ];
    }

    protected function heroFields()
    {
        return [
            Markdown::make('Introduction', 'heroIntro')
                ->rules('required'),

            Image::make('Image', 'image')
                ->deletable(false)
                ->creationRules('required')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),

            Text::make('Description de l\'image', 'heroAlt')
                ->rules('required')
                ->help('Une brève description de ce qu\'il se trouve/se passe dans l\'image, c\'est utile pour le référencement du site.')
                ->hideFromIndex(),
        ];
    }

    protected function restoFields()
    {
        return [
            Text::make('Titre', 'restoTitle')
                ->rules('required'),

            Markdown::make('Intro', 'restoIntro')
                ->rules('required')
        ];
    }

    protected function contactFields()
    {
        return [
            Text::make('Title', 'infoTitle')
                ->rules('required'),

            Textarea::make('Contenu', 'infoContent')
                ->rules('required'),

            Text::make('Label', 'infoLabel')
                ->rules('required')
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
<?php

namespace App\Nova\Templates\Panels;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;

class MetaPanel extends Panel{

    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Données meta';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
    {
        return [
            Text::make('Titre de la page', 'meta_title')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Titre de partage', 'meta_og_title')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Titre de partage pour Twitter', 'meta_twitter_title')
                ->rules('required')
                ->hideFromIndex(),

            Textarea::make('Description de la page', 'meta_description')
                ->rules('required')
                ->hideFromIndex(),

            Textarea::make('Description de partage', 'meta_og_description')
                ->rules('required')
                ->hideFromIndex(),

            Textarea::make('Description de partage de twitter', 'meta_twitter_description')
                ->rules('required')
                ->hideFromIndex(),

            Image::make('Image de partage', 'meta_image')
                ->help('L\image de partage est facultatif, une image par défaut est prévue. Veuillez choisir une image qui fait moins de 1200x630.')
                ->hideFromIndex(),
        ];
    }
}

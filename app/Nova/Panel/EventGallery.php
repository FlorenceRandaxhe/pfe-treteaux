<?php

namespace App\Nova\Panels;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Whitecube\NovaFlexibleContent\Flexible;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;

class EventGallery extends Panel{

    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Gallerie';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
    {
        return [
            Flexible::make('Gallerie', 'gallery')
                ->button('Ajouter une photo')
                ->addLayout('Photo', 'photo', [

                    Image::make('Photo', 'photo')
                        ->creationRules('required')
                        ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.')
                        ->deletable(false),

                    Text::make('Description de l\'image', 'alt')
                        ->help('Une brève description de ce qu\'il se trouve/se passe dans l\'image, c\'est utile pour le référencement du site.'),
                ]),
        ];
    }
}

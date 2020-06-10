<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class EventImage extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'photo';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Image du spectacle';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Image::make('Photo', 'photo')
                ->creationRules('required')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.')
                ->deletable(false),

            Text::make('Description de l\'image', 'alt')
                ->help('Une brève description de ce qu\'il se trouve/se passe dans l\'image, c\'est utile pour le référencement du site.'),
        ];
    }

}

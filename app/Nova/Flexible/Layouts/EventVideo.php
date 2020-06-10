<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class EventVideo extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'video';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Vidéo Youtube';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Image::make('Image de couverture', 'cover'),

            Text::make('Identifiant YouTube', 'id')
                ->help('L’identifiant YouTube est l’ensemble de caractères qui suit le "watch?v=" dans le lien de la vidéo. Ex: dans le lien https://www.youtube.com/watch?v=BfOdWSiyWoc, l’identifiant est BfOdWSiyWoc.')
        ];
    }

}

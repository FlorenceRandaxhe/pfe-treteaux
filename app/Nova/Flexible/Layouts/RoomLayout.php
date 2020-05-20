<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\File;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class RoomLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'room';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'RoomLayout';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Titre', 'roomName')
                ->rules('required'),

            Markdown::make('Contenu', 'roomContent')
                ->rules('required'),

            File::make('fichier', 'roomFile')
                ->help('Par exemple: plan de salle'),

            Text::make('Label', 'roomLabel')
                ->help('Texte qui apparapitra sur le boutton de téléchargement'),

        ];
    }

}

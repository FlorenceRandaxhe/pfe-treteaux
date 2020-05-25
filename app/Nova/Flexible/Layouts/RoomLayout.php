<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\File;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Whitecube\NovaFlexibleContent\Flexible;

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
    protected $title = 'Espace';

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

            Flexible::make('Description', 'description')
                ->button('Ajouter une caractéristique')
                ->addLayout('Caractéristique', 'feature', [
                    Text::make('Nom', 'featureName')
                        ->rules('required'),

                    Markdown::make('Contenu', 'featureContent')
                        ->rules('required'),
                ]),

            Flexible::make('Téléchargement', 'download')
                ->button('Ajouter un fichier à télécharger')
                ->addLayout('Fichier', 'file', [

                    File::make('fichier', 'roomFile')
                        ->deletable(false)
                        ->creationRules('required')
                        ->help('Par exemple: plan de salle, facultatif'),

                    Text::make('Label', 'roomLabel')
                        ->rules('required')
                        ->help('Intitulé du lien'),
                ]),

            Textarea::make('Notes', 'roomNote'),

        ];
    }

    public function getItemsAttribute()
    {
        return $this->flexible('rooms');
    }

}

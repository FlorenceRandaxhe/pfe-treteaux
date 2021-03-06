<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Template;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\File;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;
use App\Nova\Templates\Panels\MetaPanel;

class Renting extends Template {

    use HasFlexible;

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
            new Panel('Les espaces', $this->roomFields()),
            new Panel('Location', $this->formFields()),
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

    protected function roomFields()
    {
        return [
            Text::make('Titre', 'roomTitle')
                ->rules('required'),

            Flexible::make('Description des espaces', 'rooms')
                ->limit(5)
                ->confirmRemove($label = 'Voulez-vous vraiment supprimer ce contenu ?', $yes = 'Supprimer', $no = 'Annuler')
                ->stacked()
                ->button('Ajouter un espace')
                ->addLayout(\App\Nova\Flexible\Layouts\RoomLayout::class)
        ];
    }

    protected function formFields()
    {
        return [
            Text::make('Titre', 'formTitle')
                ->rules('required'),

            Textarea::make('Introduction', 'intro')
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
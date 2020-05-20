<?php

namespace App\Nova\Templates;

use App\Post;
use App\Event;
use Illuminate\Http\Request;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Markdown;
use Whitecube\NovaPage\Pages\Template;
use App\Nova\Templates\Panels\MetaPanel;

class Home extends Template {

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            new Panel('A propos', $this->aboutFields()),
            new Panel('Information', $this->infoFields()),
            new MetaPanel('Données meta')
        ];
    }

    protected function aboutFields()
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

    protected function infoFields()
    {
        return [
            Heading::make('Utile si vous avez une alerte/information importante (une annulation de spectacle par exemple) ! Elle ne s\'affichera que si vous cocher "Afficher"'),

            Boolean::make('Afficher', 'displayAlert'),

            Text::make('Title', 'alertTitle')
                ->rules('required'),

            Markdown::make('Contenu', 'alertContent')
                ->rules('required'),

            Select::make('Type d\'info', 'alertType')->options([
                'info' => 'Info (bleu)',
                'alert' => 'Alerte (rouge)'
            ]),

            Select::make('Page', 'linkAlert')->options(
                Post::pluck('title', 'slug')->toArray()
            )
                ->help('Ajouter un lien vers un article')
                ->displayUsingLabels(),

            Text::make('Label', 'labelAlert')
                ->help('Texte du lien')
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
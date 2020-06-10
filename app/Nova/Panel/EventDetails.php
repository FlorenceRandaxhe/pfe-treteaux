<?php

namespace App\Nova\Panels;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Hidden;
use Whitecube\NovaFlexibleContent\Flexible;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Epartment\NovaDependencyContainer\HasDependencies;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;

class EventDetails extends Panel
{

    use HasDependencies;
    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Détails et information pratiques';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
    {
        return [
            DateTime::make('Date du spectacle', 'date')
                ->rules('required'),

            KeyValue::make('Prix', 'prices')
                ->disableEditingKeys()
                ->disableAddingRows()
                ->disableDeletingRows()
                ->help('<strong>Indiquer simplement le prix en chiffre</strong>, il ne faut pas ajouter le "€"')
                ->keyLabel('Tarif')
                ->valueLabel('Prix')
                ->rules('required', 'json'),


            Select::make('Placement', 'seating')->options([
                '0' => 'Choix des places lors de la réservation',
                '1' => 'Placement libre',
                '2' => 'Configuration débout'
            ])->displayUsingLabels()
            ->rules('required')
            ->hideFromIndex(),

            NovaDependencyContainer::make([
                Hidden::make('seats')->default(321)
            ])->dependsOn('seating', 1),

            NovaDependencyContainer::make([
                Hidden::make('seats')->default(600)
            ])->dependsOn('seating', 2),

            Boolean::make('Mis en avant', 'featured')
                ->help('Le spectacle sera affiché dans le header de la page d\'accueil.')
                ->hideFromIndex(),

            Boolean::make('Formule resto-spectacle', 'resto')
                ->help('Le spectacle sera repris dans la liste des spectacles concernés par l\'offre resto')
                ->hideFromIndex(),

            Flexible::make('Détails & infos pratiques', 'details')
                ->hideFromIndex()
                ->button('Ajouter un détail')
                ->addLayout('Détail/info', 'block', [
                    Select::make('Icone', 'icon')->options([
                        'pin' => 'Lieu',
                        'public' => 'Public',
                        'time' => 'horloge'
                    ])->displayUsingLabels(),
                    Text::make('Titre', 'title'),
                    Text::make('Contenu', 'text'),
                ])
                ->help('Cette section est affichée à droite du contenu principale. Attention, la date et le prix y sont inclus automatiquement'),
        ];
    }
}

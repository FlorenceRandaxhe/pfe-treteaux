<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Panel;
use Whitecube\NovaFlexibleContent\Flexible;
use Laravel\Nova\Http\Requests\NovaRequest;
use Treteaux\SeatPicker\SeatPicker;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Epartment\NovaDependencyContainer\HasDependencies;

class Event extends Resource
{
    use HasDependencies;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Event::class;

    public static $group = 'Agenda';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'slug'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            new Panel('Présentation du spectacle', $this->presentationFields()),
            new Panel('Détails & infos pratiques', $this->detailsFields()),
            new Panel('Distribution', $this->distriFields()),
            new Panel('Presse', $this->pressFields()),
            new Panel('Gallerie', $this->galleryFields()),
            new Panel('Communiqué de presse', $this->pressReleaseFields()),
            new Panel('Plan de la salle', $this->occupiedSeats()),
        ];
    }

    protected function presentationFields()
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('Season')
                ->help('Si la saison souhaitée n\'apparait pas dans cette liste, il vous suffit de l\'ajouter via le lien "Type de spectacle" présent dans la barre latérale'),

            BelongsTo::make('Type')
                ->hideFromIndex()
                ->help('Si le type de spectacle souhaité n\'apparait pas dans cette liste, il vous suffit de l\'ajouter via le lien "Type de spectacle" présent dans la barre latérale'),

            Text::make('Titre du spectacle', 'title')
                ->rules('required'),

            Text::make('Slug', 'slug')
                ->rules('required', 'max:255', 'alpha_dash')
                ->creationRules('unique:events,slug')
                ->updateRules('unique:events,slug,{{resourceId}}')
                ->hideFromIndex()
                ->help('Mot clef unique relatif à la page actuelle. Il ne peut contenir que des caractères simples (lettre de a-z, pas d\'espaces, d\'accents ou autres) Par exemple, pour un post "Nous embauchons !", le slug pourrait être "nous-embauchons", la page serait alors accessible via le lien: www.votre-site.be/posts/<strong>nous-embauchons</strong>'),

            Textarea::make('Intro', 'intro')
                ->help('Maximum 200 characters.')
                ->rules('required', 'max:200')
                ->hideFromIndex(),

            Image::make('Image', 'img')
                ->hideFromIndex()
                ->deletable(false)
                ->creationRules('required')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),

            Text::make('Description de l\'image', 'alt')
                ->rules('required')
                ->help('Une brève description de ce qu\'il se trouve/se passe dans l\'image, c\'est utile pour le référencement du site.')
                ->hideFromIndex(),

            Markdown::make('Description', 'description')
                ->rules('required')
                ->stacked()
                ->hideFromIndex(),

        ];
    }

    protected function detailsFields()
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

    protected function distriFields()
    {
        return [
            Flexible::make('Distribution', 'distribution')
                ->confirmRemove()
                ->button('Ajouter une personne')
                ->addLayout('Personne', 'people', [
                    Text::make('Nom', 'name')
                        ->rules('required'),
                    Text::make('Role', 'role')
                        ->rules('required'),
                    Image::make('Photo', 'img')
                        ->help('Une image par défault est prévue si vous n\'avez pas de photo')
                        ->deletable(false),
                ])
        ];
    }

    protected function pressFields()
    {
        return [
            Flexible::make('Presse', 'press')
                ->button('Ajouter un article de presse')
                ->addLayout('Article de presse', 'press', [
                    Text::make('Titre de l\'article', 'title')
                        ->rules('required'),

                    Text::make('Lien vers l\'article', 'url')
                        ->rules('required'),

                    Textarea::make('Extrait de l\'article', 'excerpt')
                        ->rules('required'),

                    Text::make('Source', 'source')
                        ->rules('required'),
                ]),
        ];
    }

    protected function galleryFields()
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

    protected function pressReleaseFields()
    {
        return [
            File::make('Communiqué de presse', 'pressRelease')
                ->help('Les communiqués de presse des spectacles sont disponible sur la page presse et média du site'),
        ];
    }

    protected function occupiedSeats()
    {
        return [
            SeatPicker::make('Placement', 'seats')
                ->readonly()
                ->hideWhenCreating()
                ->hideFromIndex()
                ->stacked(),
        ];
    }


    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function label()
    {
        return 'Spectacles';
    }

    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function singularLabel()
    {
        return 'Spectacle';
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

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\EventSeason
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}

<?php

namespace App\Nova\Panels;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Panel;
use Treteaux\StringLimit\StringLimit;
use Laravel\Nova\Http\Requests\NovaRequest;

class EventPresentation extends Panel{

    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Présentation du spectacle';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('Saison', 'season', 'App\Nova\Season')
                ->help('Si la saison souhaitée n\'apparait pas dans cette liste, il vous suffit de l\'ajouter via le lien "Type de spectacle" présent dans la barre latérale.'  . ' <a href="/admin/resources/seasons/new">Ou cliquez ici pour créer une directement</a>'),

            BelongsTo::make('Type de spectacle', 'type', 'App\Nova\Type')
                ->hideFromIndex()
                ->help('Si le type de spectacle souhaité n\'apparait pas dans cette liste, il vous suffit de le créer')
                ->showCreateRelationButton(),

            Text::make('Titre du spectacle', 'title')
                ->rules('required'),

            Text::make('Slug', 'slug')
                ->rules('required', 'max:255', 'alpha_dash')
                ->creationRules('unique:events,slug')
                ->updateRules('unique:events,slug,{{resourceId}}')
                ->hideFromIndex()
                ->help('Mot clef unique relatif à la page actuelle. Il ne peut contenir que des caractères simples (lettre de a-z, pas d\'espaces, d\'accents ou autres)'),

            StringLimit::make('Intro', 'intro')
                ->rules('required', 'max:200')
                ->max(200)
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
}

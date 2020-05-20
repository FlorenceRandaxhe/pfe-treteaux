<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Http\Requests\NovaRequest;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    public static $group = 'Actualités';

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
            ID::make()->sortable(),

            Badge::make('Status', function () {
                return $this->published_at <= now() ? 'publié' : 'brouillon';
            })->map([
                'brouillon' => 'danger',
                'publié' => 'success',
            ]),

            DateTime::make('Date de publication', 'published_at', function (){
                return $this->published_at ?? now();
            })->rules('required')
              ->format('DD/MM/YYYY H:m')
              ->help('Vous pouvez indiquer une date dans le futur pour programmer la publication de l\'article à plus tard.'),

            Text::make('Titre', 'title')
                ->rules('required'),

            Text::make('Slug', 'slug')
                ->rules('required', 'max:255')
                ->creationRules('unique:posts,slug')
                ->updateRules('unique:posts,slug,{{resourceId}}')
                ->hideFromIndex()
                ->help('Mot clef unique relatif à la page actuelle. Il ne peut contenir que des caractères simples (lettre de a-z, pas d\'espaces, d\'accents ou autres) Par exemple, pour un post "Nous embauchons !", le slug pourrait être "nous-embauchons", la page serait alors accessible via le lien: www.votre-site.be/posts/<strong>nous-embauchons</strong>'),

            Image::make('Image', 'img')
                ->hideFromIndex()
                ->deletable(false)
                ->creationRules('required')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),

            Text::make('Description de l\'image', 'alt')
                ->rules('required')
                ->help('Une brève description de ce qu\'il se trouve/se passe dans l\'image, c\'est utile pour le référencement du site.')
                ->hideFromIndex(),

            Markdown::make('Contenu', 'content')
                ->rules('required')
                ->hideFromIndex(),
        ];
    }


    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function label()
    {
        return 'Articles';
    }

    /**
     * The plural form for the current resource
     *
     * @var string
     */
    public static function singularLabel()
    {
        return 'Article';
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
        return [];
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

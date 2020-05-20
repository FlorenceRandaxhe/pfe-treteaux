<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Template;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;
use App\Nova\Templates\Panels\MetaPanel;

class About extends Template {

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
            new Panel('La salle', $this->salleFields()),
            new Panel('La salle polyvalente', $this->polyFields()),
            new Panel('Le foyer', $this->foyerFields()),
            new Panel('L\'équipe', $this->teamFields()),
            new Panel('Services', $this->serviceFields()),
            new MetaPanel('Données meta')
        ];
    }

    protected function heroFields()
    {
        return [
            Text::make('Titre', 'heroTitle')
                ->rules('required'),

            Textarea::make('Introduction', 'heroIntro')
                ->rules('required'),

            Image::make('Image', 'heroBanner')
                ->deletable(false)
                ->creationRules('required')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),
        ];
    }

    protected function salleFields()
    {
        return [
            Text::make('Titre', 'salleTitle')
                ->rules('required'),

            Markdown::make('Contenu', 'salleContent')
                ->rules('required'),

            Image::make('Image', 'salleImg')
                ->deletable(false)
                ->creationRules('required')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),
        ];
    }

    protected function polyFields()
    {
        return [
            Text::make('Titre', 'polyTitle')
                ->rules('required'),

            Text::make('Introduction', 'polyIntro')
                ->rules('required'),

            Markdown::make('Contenu', 'polyContent')
                ->rules('required'),

            Image::make('Image', 'polyImg')
                ->deletable(false)
                ->creationRules('required')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),
        ];
    }

    protected function foyerFields()
    {
        return [
            Text::make('Titre', 'foyerTitle')
                ->rules('required'),

            Text::make('Introduction', 'foyerIntro')
                ->rules('required'),

            Textarea::make('Contenu', 'foyerContent')
                ->rules('required'),

            Image::make('Image', 'foyerImg')
                ->deletable(false)
                ->creationRules('required')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),
        ];
    }

    protected function teamFields(){
        return [
            Text::make('Titre', 'teamTitle')
                ->rules('required')
        ];
    }

    protected function serviceFields()
    {
        return [
            Flexible::make('Services', 'services')
                ->button('Ajouter un service')
                ->addLayout(\App\Nova\Flexible\Layouts\ServiceLayout::class)
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
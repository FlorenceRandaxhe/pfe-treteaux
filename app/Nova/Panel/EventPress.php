<?php

namespace App\Nova\Panels;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Flexible;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;

class EventPress extends Panel{

    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Presse';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
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
}

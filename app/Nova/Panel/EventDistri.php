<?php

namespace App\Nova\Panels;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Whitecube\NovaFlexibleContent\Flexible;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;

class EventDistri extends Panel{

    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Distribution';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
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
}

<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Date;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class PressLayout extends Layout
{
    public $casts = [
        'published_at' => 'date'
    ];
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'press';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'PressLayout';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Date::make('Date de publication', 'published_at')
                ->pickerFormat('d.m.Y')
                ->rules('required'),

            Text::make('Titre de l\'article', 'title')
                ->rules('required'),

            Text::make('Lien vers l\'article', 'url')
                ->rules('required'),

            Textarea::make('Extrait de l\'article', 'excerpt')
                ->rules('required'),

            Text::make('Source', 'source')
                ->rules('required'),
        ];
    }

}

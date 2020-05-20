<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;

class ServiceLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'service';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'ServiceLayout';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Icone', 'icone')->options([
                'bar'       => 'Bar',
                'resto'     => 'Restauration',
                'vestiaire'  => 'Vestiaire',
            ])->displayUsingLabels()
                ->rules('required'),

            Text::make('Titre', 'serviceTitle')
                ->rules('required'),

            Markdown::make('Contenu', 'serviceContent')
                ->rules('required'),
        ];
    }

}

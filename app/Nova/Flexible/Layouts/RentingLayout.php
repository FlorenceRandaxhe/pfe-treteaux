<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class RentingLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'rentinglayout';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = '';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Nom', 'name'),
            Text::make('Adresse e-mail', 'email'),
            Text::make('Date de location', 'date'),
            Textarea::make('Message', 'message')->alwaysShow()
        ];
    }

}

<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ContactLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'contactlayout';

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
            Text::make('Sujet', 'subject'),
            Text::make('Adresse e-mail', 'email'),
            Textarea::make('Message', 'message')->alwaysShow()
        ];

    }

}

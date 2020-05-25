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


        ];
    }

}

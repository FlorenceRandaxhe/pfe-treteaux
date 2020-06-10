<?php

namespace App\Nova\Panels;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Whitecube\NovaFlexibleContent\Flexible;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;

class EventGallery extends Panel{

    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Gallerie';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
    {
        return [
            Flexible::make('Gallerie', 'gallery')
                ->button('Ajouter un média')
                ->addLayout(\App\Nova\Flexible\Layouts\EventImage::class)
                ->addLayout(\App\Nova\Flexible\Layouts\EventVideo::class),
        ];
    }
}

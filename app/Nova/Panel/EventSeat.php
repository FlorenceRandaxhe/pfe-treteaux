<?php

namespace App\Nova\Panels;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;

class EventSeat extends Panel
{



    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Communiqué de presse';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
    {
        return [
            File::make('Communiqué de presse', 'pressRelease')
                ->help('Les communiqués de presse des spectacles sont disponible sur la page presse et média du site'),
        ];
    }


}

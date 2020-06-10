<?php

namespace App\Nova\Panels;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Treteaux\SeatPicker\SeatPicker;
use Laravel\Nova\Panel;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Epartment\NovaDependencyContainer\HasDependencies;
use Laravel\Nova\Http\Requests\NovaRequest;

class EventSeat extends Panel
{

    use HasDependencies;

    /**
     * Create a new panel instance.
     *
     * @param  string  $name
     * @param  \Closure|array  $fields
     * @return void
     */
    public function __construct($name = null, $fields = null)
    {
        $name = $name ?? 'Plan de salle';
        $fields = $fields ?? $this->fields();

        parent::__construct($name, $fields);
    }

    public function fields()
    {
        return [
            NovaDependencyContainer::make([
                Text::make('Place(s) restante(s)', 'seats')
                    ->readonly()
                    ->hideWhenCreating()
                    ->hideFromIndex()
            ])->dependsOn('seating', 1),

            NovaDependencyContainer::make([
                Text::make('Place(s) restante(s)', 'seats')
                    ->readonly()
                    ->hideWhenCreating()
                    ->hideFromIndex()
            ])->dependsOn('seating', 2),

            NovaDependencyContainer::make([
                SeatPicker::make('Placement', 'seats')
                    ->readonly()
                    ->hideWhenCreating()
                    ->hideFromIndex()
                    ->stacked(),
            ])->dependsOn('seating', 0),


        ];
    }
}

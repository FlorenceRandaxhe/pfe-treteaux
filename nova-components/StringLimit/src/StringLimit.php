<?php

namespace Treteaux\StringLimit;

use Laravel\Nova\Fields\Field;

class StringLimit extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'string-limit';

    public function max($value)
    {
        return $this->withMeta([
            'maxLenght' => $value,
        ]);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}

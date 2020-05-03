<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}

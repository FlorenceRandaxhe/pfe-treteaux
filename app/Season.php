<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'year';
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function scopeLatestSeason($query)
    {
        return $query->where('archived', '=', false)->latest()->first();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = [];

    protected $casts = [
        'archived' => 'boolean'
    ];

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
        return $query->where('archived', false)->latest()->first();
    }

    public function scopeSeason($query)
    {
        return $query->latest()->first()->where('archived', false);
    }
}

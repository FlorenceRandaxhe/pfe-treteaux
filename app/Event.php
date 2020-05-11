<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    protected $table = 'events';

    use SoftDeletes;

    protected $dates = ['date', 'deleted_at', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function scopeResto($query)
    {
        return $query->where('resto', '=', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', '=', true);
    }
}

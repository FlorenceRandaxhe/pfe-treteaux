<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;

class Event extends Model
{
    use SoftDeletes;
    use HasFlexible;

    protected $guarded = [];
    //protected $fillable = ['seats'];
    protected $dates = ['date', 'deleted_at', 'created_at', 'updated_at'];

    protected $casts = ['date' => 'datetime', 'seats' => 'array', 'prices' => 'array'];

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

    public function getGalleryContentAttribute()
    {
        return $this->flexible('gallery');
    }

    public function getPressContentAttribute()
    {
        return $this->flexible('press');
    }

    public function getDistributionContentAttribute()
    {
        return $this->flexible('distribution');
    }

    public function getDetailsContentAttribute()
    {
        return $this->flexible('details');
    }

    public function scopeResto($query)
    {
        return $query->where('resto', '=', true)->orderBy('date', 'ASC');
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', '=', true)->orderBy('date', 'ASC');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['published_at', 'deleted_at', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now())->orderBy('published_at', 'desc');
    }
}

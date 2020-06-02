<?php

namespace App;

use App\Event;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    protected $dates = ['orderDate', 'created_at', 'updated_at'];

    protected $casts = [
        'orderDate' => 'datetime:Y-m-d H:i:s',
        'order' => 'json',
        'clientInfo' => 'json'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function scopeEventOrder($query, $value)
    {
        return $query->where('event_id', $value);
    }
}

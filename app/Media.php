<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $dates = ['published_at', 'created_at', 'updated_at'];

}

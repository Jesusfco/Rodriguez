<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPhoto extends Model
{
    protected $fillable = [
        'creator_id', 'name', 'resume', 'img', 'photo_cost', 'photo_print_cost', 'now'
    ];
}

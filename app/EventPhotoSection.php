<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPhotoSection extends Model
{
    protected $fillable = [
        'event_photo_id', 'name', 'description', 'order'
    ];
}

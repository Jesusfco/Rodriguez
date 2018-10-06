<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPhotoImage extends Model
{
    protected $fillable = [
        'event_photo_id', 'event_photo_section_id', 'order', 'img', 'selects'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPhotoReceipt extends Model
{
    protected $fillable = [
        'user_id', 'event_photo_id', 'event_photo_images_id', 'event_photo_images_print_id', 'amount', 'status'
    ];
}

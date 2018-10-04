<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'img', 'foreign_id', 'order', 'select', 'type'
    ];

    public $timestamps = false;
    
}

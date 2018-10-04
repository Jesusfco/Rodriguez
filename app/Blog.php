<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'creator_id', 'title', 'resume', 'description', 'img', 'date', 'youtube'
    ];
}

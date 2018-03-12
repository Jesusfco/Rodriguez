<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'user_id', 'service_id', 'work_status_id', 'title', 'resume', 'cost', 'img', 'gallery'
    ];
}

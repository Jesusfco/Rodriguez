<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorksPart extends Model
{
    protected $fillable = [
        'work_id', 'title', 'description', 'cost', 'status'
    ];
}

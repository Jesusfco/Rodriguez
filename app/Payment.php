<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'work_id', 'amount', 'date'
    ];

    public $timestamps = false;
}

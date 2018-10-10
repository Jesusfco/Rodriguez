<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'resume', 'description', 'img', 'youtube', 'public'
    ];

    public function public() {
        if($this->public == true) {
            return 'Si';
        } return 'No';
    }
    
}

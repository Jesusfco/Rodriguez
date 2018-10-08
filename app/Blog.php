<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'creator_id', 'title', 'resume', 'description', 'img', 'date', 'youtube'
    ];

    public function scopeSearch($query, $name) 
    {
        $n = $query->where('title', 'LIKE', "%$name%")->get();
        return $query->where('title', 'LIKE', "%$name%");
    }

    
}

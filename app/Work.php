<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'user_id','creator_id', 'service_id', 'work_status_id', 'title', 
        'resume', 'description', 'cost', 'img', 'public', 'youtube', 'photos_quantity',
        'comentary_client'
    ];

    public function scopeSearch($query, $name) 
    {
        $n = $query->where('title', 'LIKE', "%$name%")->get();
        return $query->where('title', 'LIKE', "%$name%");
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function creator()
    {
        return $this->hasOne('App\User', 'id', 'creator_id');
    }
    
}

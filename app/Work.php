<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'user_id','creator_id', 'service_id', 'work_status_id', 'title', 
        'resume', 'description', 'cost', 'img', 'public', 'youtube', 'photos_quantity',
        'comentary_client', 'link'
    ];

    public function scopeSearch($query, $name) {
        $n = $query->where('title', 'LIKE', "%$name%")->get();
        return $query->where('title', 'LIKE', "%$name%");
    }

    public function status() {
        if($this->work_status_id == 1) {
            return 'Planificación';
        } else if ($this->work_status_id == 2) {
            return 'Proceso';
        } else if ($this->work_status_id == 3) {
            return 'Entregado';
        }
    }

    public function public() {
        if($this->public == true) {
            return 'Si';
        } return 'No';
    }

    public function cost() {
        $parts = WorksPart::where('work_id', $this->id)->select('cost')->get();
        $cost = 0;
        foreach($parts as $de) {            
            $cost += $de->cost;
        }

        return $cost;
    }

    public function deposit() {
        $deposits = Payment::where('work_id', $this->id)->select('amount')->get();        
        $deposit = 0;

        foreach($deposits as $de) {
            $deposit += $de->amount;
        }

        return $deposit;
    }

    public function debt() {
        $deposits = Payment::where('work_id', $this->id)->select('amount')->get();        
        $deposit = 0;

        foreach($deposits as $de) {
            $deposit += $de->amount;
        }

        return $this->cost() - $deposit;
    }
    
    public function payments() {
        return $this->hasMany('App\Payment', 'work_id');
    }

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function creator() {
        return $this->hasOne('App\User', 'id', 'creator_id');
    }

    public function parts(){
        return $this->hasMany('App\WorksPart', 'work_id', 'id');
    }
    
}

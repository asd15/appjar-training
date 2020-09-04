<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public function Instructor(){
        return $this->belongsTo('App\instructor');
    }
}

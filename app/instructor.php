<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    public function Profile(){
        return $this->hasOne('App\profile');
    }
}

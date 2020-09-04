<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'add_courses_table';

    //to make title and content to be fillable and modified
    // during mass assignment in courseController
    protected $fillable = ['title', 'content'];

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}

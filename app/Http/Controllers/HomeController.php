<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function courses(){
        return view('courses');
    }

    public function course_name($id, $name = 1){
        $course = [
            1 => [
                'title' => 'Course one'
            ],
            2 => [
                'title' => 'Course two'
            ]
        ];

        $cnames = [1 => '<b>Java</b>', 2 => '<b>C++</b>'];

        return view('course-name', ['data' => $course[$id], 'cname' => $cnames[$name]]);
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//}); //this is used when data needs to be passed, else use ::view

//Route::view('/', 'home')->name('home'); //named route
Route::get('/', 'HomeController@home')->name('home'); //after creating HomeController
Route::get('/contact', 'HomeController@courses')->name('contact');

//data send(course_id) cannot contain underscore and it must contain alphabets
//add ? for optional parameter
//Route::get('/course-name/{course_id}/{cname?}', 'HomeController@course_name')->name('course-name');
//after adding resource controller
Route::resource('/course', 'CourseController')
    ->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
]);
//or
//->except('destroy');

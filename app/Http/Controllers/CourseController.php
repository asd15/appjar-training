<?php

namespace App\Http\Controllers;

use App\Course;

use App\Http\Requests\StoreCourse;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('course.index', ['courses' => Course::withCount('comment')->get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$request->session()->reflash();
        return view('course.show', ['course' => Course::with('comment')->findOrFail($id)]);
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(StoreCourse $request)
    {
        $validateData = $request->validated();
        $newCourse = Course::create($validateData);
        $request->session()->flash('status', 'Course was added');

        return redirect()->route('course.show', ['course' => $newCourse->id]);
    }

    public function edit($id){
        $edit_course = Course::findOrFail($id);
        return view('course.edit', ['course' => $edit_course]);
    }

    public function update(StoreCourse $request, $id){
        $course = Course::findOrFail($id);
        $validatedData = $request->validated();

        $course->fill($validatedData);
        $course->save();
        $request->session()->flash('status', 'Course was updated');

        return redirect()->route('course.show', ['course' => $course->id]);
    }

    public function destroy(Request $request, $id){
        //method 1
        $course = Course::findOrFail($id);
        $course->delete();
        //method 2
        //Course::destroy($id)

        $request->session()->flash('status', 'Course was Deleted');

        return redirect()->route('course.index');
    }
}

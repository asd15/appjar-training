@extends('layout')

@section('title')
    <title>Create</title>
@endsection

@section('content')
    <form method="POST" action="{{ route('course.update', ['course' => $course->id]) }}">
        @csrf
        @method('PUT') <!--method spoofing-->

            @include('course._form')

        <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
    </form>
@endsection

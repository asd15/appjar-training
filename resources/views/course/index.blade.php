@extends('layout')

@section('title')
    <title>Courses</title>
@endsection

@section('content')
    @forelse($courses as $course)
        <p>
            <h3>
            <a href="{{ route('course.show', ['course' => $course->id]) }}">{{ $course->title }}</a>
        </h3>

        @if($course->comments_count)
            <p>{{ $course->comments_count }} comments</p>
        @else
            <p>No comments yet</p>
        @endif

        <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="btn btn-primary">Edit</a>
        </p>

        <form method="POST" class="fm-inline" action="{{ route('course.destroy', ['course' => $course->id]) }}">
        @csrf
        @method('DELETE') <!--method spoofing-->


            <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
    @empty
        <p>No courses yet!</p>
    @endforelse
@endsection

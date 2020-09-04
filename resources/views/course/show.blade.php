@extends('layout')

@section('title')
    <title>{{ $course->title }}</title>
@endsection

@section('content')
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->content }}</p>

    <!--here date is a carbon object, carbon is the DateTime PHP lib in laravel-->
    <p>{{ $course->created_at->diffForHumans() }}</p>

    <!-- new Carbon holds current time-->
    @if ((new Carbon\Carbon())->diffInMinutes($course->created_at) < 5 )
        <strong>New Course</strong>
    @else
        <stong>Old Course</stong>
    @endif


    <h4>Comments</h4>

    @forelse($course->comment as $comment)
        <p>
            {{ $comment->content }}, added {{ $comment->created_at->diffForHumans() }}
        </p>
    @empty
        <p>No comments yet!</p>
    @endforelse
@endsection

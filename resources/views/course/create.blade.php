@extends('layout')

@section('title')
    <title>Create</title>
@endsection

@section('content')
    <form method="POST" action="{{ route('course.store') }}">
        @csrf

        @include('course._form')

        <button type="submit" class="btn btn-primary btn-block">Create</button>
    </form>
@endsection

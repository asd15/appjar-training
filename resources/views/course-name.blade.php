@extends('layout')

@section('title')
    <title></title>
@endsection

@section('content')
    {{ $data['title'] }} {!! $cname !!}
@endsection

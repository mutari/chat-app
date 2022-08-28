@extends('layouts.layout')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Hello {{ $name }}</h1>
        <a href="{!! route('createPost') !!}" class="btn btn-info">Add Post</a>
    </div>
@endsection

@extends('layouts.layout')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Hello {{ $name }}</h1>

        <span>
            {{ $data }}
        </span>

    </div>
@endsection

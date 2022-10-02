@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-8">
            <h1>{{ $drink['name'] }}</h1>
            <div>
                @foreach ($drink['ingredients'] as $ingredient)
                    <div>
                        <span>{{ $ingredient }}</span>
                    </div>
                @endforeach
            </div>
            <div>
                @foreach ($drink['instructions'] as $instruction)
                    <div>
                        <span>{{ $instruction }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-4">
            <div>
                <img src="{{ $drink['image'] }}" alt="{{ $drink['name'] }}">
            </div>
            <p>{!! $drink['description'] !!}</p>
        </div>
    </div>



@endsection

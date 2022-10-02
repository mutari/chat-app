@extends('layouts.layout')

@section('content')

    <div>
        <h1>Recipes</h1>
    </div>

    <div class="row">
        @foreach ($drinks as $drink)

            <div class="col-6">
                <a class="card mb-3" href="/drinking/recipe/{{ $drink['id'] }}">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $drink['image'] }}" alt="{{ $drink['name'] }}" class="img-fluid rounded-start" loading="lazy" height="200" width="200">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $drink['name'] }}</h5>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach
    </div>

@endsection

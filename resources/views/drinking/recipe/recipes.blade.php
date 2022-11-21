@extends('layouts.layout')

@section('content')

    <div>

    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
        @foreach ($drinks as $drink)

            <div class="border border-slate-500 rounded hover:scale-110 bg-slate-900">
                <a class="" href="/drinking/recipe/{{ $drink['id'] }}">
                    <div class="flex flex-row">
                        <div class="shrink-0 w-48">
                            <img src="{{ $drink['image'] }}" alt="{{ $drink['name'] }}" class="rounded" loading="lazy" height="200" width="200">
                        </div>
                        <div class="grow">
                            <div class="h-full p-2">
                                <div class="relative h-full">
                                    <h5 class="">{{ $drink['name'] }}</h5>
                                    <p class="absolute bottom-0 right-0"><small class="text-muted">3 min</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach
    </div>

@endsection

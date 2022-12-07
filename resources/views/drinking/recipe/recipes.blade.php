@extends('layouts.layout')

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-2 font-montserrat">
        @foreach ($drinks as $drink)

            <div class="flex flex-row bg-black rounded-lg shadow-lg">
                <div class="w-2/5 overflow">
                    <img src="{{ $drink['image'] }}" alt="{{ $drink['name'] }}" class="w-full rounded-l-lg" loading="lazy" height="200" width="200">
                </div>
                <div class="w-3/5 m-6 flex flex-col gap-2 2xl:gap-4">
                    <h2 class="text-3xl truncate w-4/5">{{ $drink['name'] }}</h2>
                    <div class="w-3/5 flex justify-between">
                        <span>{{ count($drink['ingredients']) }}</span>
                        <span>{{ $drink['timeToCreate'] }}</span>
                        <span class="border px-2 rounded-lg">{{ !empty($drink['tag']) ? str_replace('drinkar', '', $drink['tag']) : '' }}</span>
                    </div>
                    <div>
                        <x-rating stars="1,1,1,1,1,1,0,0,0,0"></x-rating>
                    </div>
                    <div>
                        <span class="line-clamp-2 md:line-clamp-4 lg:line-clamp-6 xl:line-clamp-2 2xl:line-clamp-3 description">
                            {!! $drink['description'] !!}
                        </span>
                        <a class="text-yellow-400 underline hover:brightness-75" href="/drinking/recipe/{{ $drink['id'] }}">
                            Read more
                        </a>
                    </div>
                </div>
            </div>

        <!--
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
         -->

        @endforeach
    </div>

@endsection

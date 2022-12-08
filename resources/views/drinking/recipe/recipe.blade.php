@extends('layouts.layout')

@section('content')


    <div>
        <h1 class="text-4xl text-center mb-6">{{ $drink['name'] }}</h1>
        <div class="flex flex-col lg:flex-row m-6 gap-12 lg:gap-6 font-montserrat">
            <div class="w-full lg:w-3/5">
                <div class="mb-4">
                    <h4 class="text-xl mb-2">Ingredients</h4>
                    <ul class="list-disc">
                        @foreach ($drink['ingredients'] as $ingredient)
                            <li class="mb-1">
                                <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 mr-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/>
                                <span>{{ $ingredient }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl mb-2">Instructions</h4>
                    <ol class="list-decimal">
                        @foreach ($drink['instructions'] as $instruction)
                            <li class="mb-1">{{ $instruction }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="w-full lg:w-2/5">
                <div class="w-full mb-6">
                    <img src="{{ $drink['image'] }}" alt="{{ $drink['name'] }}" class="mx-auto rounded-lg">
                </div>
                <p>{!! $drink['description'] !!}</p>
            </div>
        </div>
    </div>


@endsection

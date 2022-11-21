@extends('layouts.layout')

@section('content')
    @if(!empty($notion))
        <div class="flex flex-col gap-1">
            @foreach($notion as $n)
                <a class="mb-2 hover:text-slate-500">
                    <span class="" href="{{ $n['url'] }}">{{ $n['title'] }}</span>
                    <div class="flex flex-row gap-2">
                        @foreach($n['tags'] as $tag)
                            <div class="p-2 border border-gray-500 rounded">
                                <span>{{ $tag['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </a>
            @endforeach
        </div>
        <div class="w-full">
        <span>
            {{ count($notion) }}
        </span>
        </div>
    @else
        <div class="flex justify-center items-center h-full">
            <p>
                <span>src:</span>
                <a href="/config/user-integration" class="hover:text-slate-600">Add a notion integration</a>
            </p>
        </div>
    @endif
@endsection

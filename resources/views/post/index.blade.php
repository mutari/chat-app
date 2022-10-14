@extends('layouts.layout')

@section('content')
    <div class="w-full flex flex-row gap-4">
        <div class="shrink-0 w-48 p-2">
            <div class="flex flex-col justify-start">
                <x-button type="link" href="{!! route('createPost') !!}">
                    @includeIf('components.icons.outline.bord')
                    Add Post
                </x-button>
            </div>
        </div>
        <div class="">
            <div id="posts" class="flex flex-col gap-4"></div>
        </div>
    </div>

    <script>
        onReady(() => {

            getPosts();

        });
    </script>

@endsection

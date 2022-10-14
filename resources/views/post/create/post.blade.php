@extends('layouts.layout')

@section('content')

    <form id="createPost">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <h1 class="h3 mb-3 fw-normal">Create post</h1>


        <x-input name="title" type="title" placeholder="Title" required>Title</x-input>

        <x-textarea name="text" placeholder="Text" required>Text</x-textarea>

        <x-button type="submit">Create</x-button>

    </form>

    <script>
        onReady(() => {
            document.querySelector('#createPost').addEventListener('submit', event => {
                event.preventDefault();
                event.stopImmediatePropagation();
                createPost();
            })
        })
    </script>

@endsection

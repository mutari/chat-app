@extends('layouts.layout')

@section('content')
    <div class="p-5 w-100">
        <a href="{!! route('createPost') !!}" class="btn btn-info">Add Post</a>
        <div id="posts"></div>
    </div>

    <script>
        onReady(() => {

            getPosts();

        });
    </script>

@endsection

@extends('layouts.layout')

@section('content')

    <form id="createPost">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <h1 class="h3 mb-3 fw-normal">Create post</h1>

        <label for="title">Title</label>
        <div class="form-group form-floating mb-3">
            <input type="text" name="title" id="title" class="form-control">
            <label for="floatingTitle">Title</label>
        </div>


        <div class="mb-3">
            <label for="text">Text</label>
            <textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Create</button>

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

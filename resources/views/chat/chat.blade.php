@extends('layouts.layout')

@section('content')
    <div class="w-full flex flex-row gap-4">

        <div class="shrink-0 w-48 p-2">
            <div id="user-list">

            </div>
        </div>

        <div class="grow">
            <div id="chat">

            </div>
        </div>

        <script>

            onReady(async () => {

                let html = await fetchHtml('/chat/get-users');

                document.querySelector('#user-list').innerHTML = html;

            })

        </script>

    </div>
@endsection

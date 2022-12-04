@extends('layouts.layout')

@section('content')
    <!-- icons from https://heroicons.com/-->
    <div class="w-full h-full flex justify-center items-center">

        <div id="schema" class="grid grid-cols-10 grid-rows-4 gap-4">

            @foreach($schema as $data)

                <div id="schema_{{ $data['title'] }}"
                     class="p-4
                     {{ $data['col'] ? 'col-span-'.$data['col'] : '' }}
                     {{ $data['row'] ? 'row-span-'.$data['row'] : '' }}"
                     data-url="{{ $data['url'] }}">
                    <div class="text-center">
                        <h4 class="text-2xl m-4">{{ $data['title'] }}</h4>
                    </div>
                    <div class="content border border-gray-100 rounded p-4">

                    </div>
                </div>

            @endforeach

        </div>

        <script>

            onReady(() => {
                document.querySelectorAll('#schema [id^="schema_"]').forEach(element => {
                    let url = element.dataset.url;
                    loadHtml(element.querySelector('.content'), url);
                });
            });

        </script>
    </div>
@endsection

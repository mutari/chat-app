@extends('layouts.layout')

@section('content')
    <!-- icons from https://heroicons.com/-->
    <!--
    <div class="hidden col-start-1 col-start-2 col-start-3 col-start-4 col-start-5 col-start-6 col-start-7 col-start-8 col-start-9
                       row-start-1 row-start-2 row-start-3 row-start-4 row-start-5 row-start-6 row-start-7 row-start-8 row-start-9
                       col-span-1 col-span-2 col-span-3 col-span-4 col-span-5 coWl-span-6 col-span-7 col-span-8 col-span-9
                       row-span-1 row-span-2 row-span-3 row-span-4 row-span-5 row-span-6 row-span-7 row-span-8 row-span-9">
    </div>
    -->
    <div class="w-full h-full flex justify-center items-center">

        <div id="schema" class="grid grid-cols-11 grid-rows-6 gap-4 h-full">

            @foreach($schema as $data)

                <div id="schema_{{ $data['title'] }}"
                     class="p-4 {{ !empty($data['col']) ? 'col-span-'.$data['col'] : '' }} {{ !empty($data['row']) ? 'row-span-'.$data['row'] : '' }} {{ !empty($data['start-col']) ? 'col-start-'.$data['start-col'] : '' }} {{ !empty($data['start-row']) ? 'row-start-'.$data['start-row'] : '' }}"
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

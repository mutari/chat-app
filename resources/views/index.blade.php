@extends('layouts.layout')

@section('content')
    <!-- icons from https://heroicons.com/-->
    <div class="w-full h-full flex justify-center items-center">
        <div id="apps" class="flex flex-row">
            @guest
                <x-app icon="map" href="http://test.mutariproject.com/index.php">Map</x-app>
                <x-app icon="exclamationTriangle" href="/test">Experiments</x-app>
            @endguest
            @auth
                <x-app icon="map" href="http://test.mutariproject.com/index.php">Map</x-app>
                <x-app icon="bord" href="/post">Posts</x-app>
                <x-app icon="chatBubble" href="/chat">Chat</x-app>
                <x-app icon="glass" href="/drinking">Drinking</x-app>
                <x-app icon="link" href="/test/links">Links</x-app>
                <x-app icon="exclamationTriangle" href="/test">Experiments</x-app>
            @endauth
        </div>
    </div>
@endsection

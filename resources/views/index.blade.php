@extends('layouts.layout')

@section('content')
    <!-- icons from https://heroicons.com/-->
    <div class="w-full h-full flex justify-center items-center">
        <div id="apps" class="flex flex-row">
            @guest
                <a class="app" href="http://test.mutariproject.com/index.php" >
                    <div class="btn btn-outline-secondary app-icon">
                        <i class="bi bi-map"></i>
                    </div>
                    <span class="app-title">Map</span>
                </a>
            @endguest
            @auth
                <x-app icon="map" href="http://test.mutariproject.com/index.php">Map</x-app>
                <x-app icon="bord" href="/post">posts</x-app>
                <x-app icon="chatBubble" href="/chat">chat</x-app>
                <x-app icon="glass" href="/drinking">drinking</x-app>
                <x-app icon="link" href="/links">links</x-app>
            </div>
        </div>
    @endauth
@endsection

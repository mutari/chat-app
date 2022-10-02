@extends('layouts.layout')

@section('content')
    <div class="w-100 flex-column text-center">
        <div id="apps" class="m-5">
            @guest
                <a class="app" href="http://test.mutariproject.com/index.php" >
                    <div class="btn btn-outline-secondary app-icon">
                        <i class="bi bi-map"></i>
                    </div>
                    <span class="app-title">Map</span>
                </a>
            @endguest
            @auth
                <a class="app" href="http://test.mutariproject.com/index.php" >
                    <div class="btn btn-outline-secondary app-icon">
                        <i class="bi bi-map"></i>
                    </div>
                    <span class="app-title">Map</span>
                </a>
                <a class="app" href="/post" >
                    <div class="btn btn-outline-secondary app-icon">
                        <i class="bi bi-sticky"></i>
                    </div>
                    <span class="app-title">posts</span>
                </a>
                <a class="app" href="/chat" >
                    <div class="btn btn-outline-secondary app-icon">
                        <i class="bi bi-chat"></i>
                    </div>
                    <span class="app-title">chat</span>
                </a>
                <a class="app" href="/drinking" >
                    <div class="btn btn-outline-secondary app-icon">
                        <i class="bi bi-cup-straw"></i>
                    </div>
                    <span class="app-title">drinking</span>
                </a>
                <a class="app" href="/links" >
                    <div class="btn btn-outline-secondary app-icon">
                        <i class="bi bi-link"></i>
                    </div>
                    <span class="app-title">links</span>
                </a>
            </div>
        </div>
    @endauth
@endsection

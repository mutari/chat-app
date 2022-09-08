@extends('layouts.layout')

@section('content')
    @guest
        <h1>Not logged in</h1>
    @endguest
    @auth
        <div class="w-100 flex-column text-center">
            <div id="apps" class="m-5">
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
            </div>
        </div>
    @endauth
@endsection

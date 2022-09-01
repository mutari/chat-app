<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" data-token="{{ csrf_token() }}">
        <title>{{ $title ?? 'Chat-Me' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="/js/tools.js"></script>
        <script src="/js/script.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg position-fixed" style="left: 0; right: 0;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Chat-Me</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="nav-item me-auto"></div>
                    @isset (Auth()->user()->username)
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth()->user()->username }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                <li><a class="dropdown-item d-flex justify-content-between" href="/logout">Logout<i class="bi bi-door-closed"></i></a></li>
                            </ul>
                        </div>
                    @endisset
                    @empty (Auth()->user()->username)
                        <div class="nav-item">
                            <a class="btn" href="login">
                                Login
                            </a>
                        </div>
                    @endempty
                </div>
            </div>
        </nav>
        <div class="main-content">
            <main class="container d-flex justify-content-center align-items-center h-100">
                @yield('content')
            </main>
        </div>
    </body>
</html>
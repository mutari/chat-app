<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" data-token="{{ csrf_token() }}">
        <title>{{ $title ?? 'MutariProject.com' }}</title>
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/tools.js"></script>
        <script src="/js/script.js"></script>
        @yield('head')
    </head>
    <body class="bg-slate-900 text-slate-50 h-screen">
        <nav class="bg-transparent border-gray-200 px-2 py-2.5 rounded fixed top-0 left-0 right-0">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="/" class="text-slate-400 font-medium">MutariProject.com</a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    @isset (Auth()->user()->username)
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-slate-400 flex flex-row items-center" type="button">
                            <span>{{ Auth()->user()->username }}</span>
                            <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="hidden z-10 w-44 rounded divide-y divide-gray-100 shadow bg-slate-700">
                            <div>
                                <a href="/logout" class="block py-2 px-4 text-sm text-slate-100 hover:text-slate-300">Sign out</a>
                            </div>
                        </div>
                    @endisset
                    @empty (Auth()->user()->username)
                        <a class="text-slate-400" href="/login">
                            Login
                        </a>
                    @endempty
                </div>
            </div>
        </nav>
        <div class="container mx-auto px-4 pt-14 h-full">
            @yield('content')
        </div>
        <script src="https://unpkg.com/flowbite"></script>
    </body>
</html>

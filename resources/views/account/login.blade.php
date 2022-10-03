@extends('layouts.layout')

@section('content')
    <form method="post" action="{{ route('login.perform') }}" class="max-w-lg mx-auto mt-24 md:mt-48">
        <h1 class="mb-12 text-4xl text-center">Login</h1>

        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

        <x-input value="{{ old('username') }}" name="username" type="email" placeholder="name@hostname.com" required autofocus>Your mail</x-input>

        <x-input value="{{ old('password') }}" name="password" type="password" placeholder="Password" required>Password</x-input>

        <div class="flex flex-row justify-between">
            <x-button type="submit">Login</x-button>
            <a href="{{ route('register') }}" class="float-end mt-3">Dont have an account?</a>
        </div>
    </form>
@endsection

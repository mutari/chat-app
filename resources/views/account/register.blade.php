@extends('layouts.layout')

@section('content')
    <form method="post" action="{{ route('register.perform') }}" class="max-w-lg mx-auto mt-24 md:mt-48">
        <h1 class="mb-12 text-4xl text-center">Register</h1>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <x-input type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>Email address</x-input>

        <x-input type="text" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>Username</x-input>

        <x-input type="password" name="password" value="{{ old('password') }}" placeholder="Password" required>Password</x-input>

        <x-input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required>Confirm Password</x-input>

        <x-button type="submit">Create new account</x-button>

    </form>
@endsection

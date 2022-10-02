@extends('layouts.layout')

@section('content')
    <div class="content">
        <form method="post" action="{{ route('login.perform') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" /

            <x-input value="{{ old('username') }}" name="username" type="email"/>

            <div class="mb-6">
                <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
            </div>

            <div class="flex flex-row justify-between">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <a href="{{ route('register') }}" class="float-end mt-3">Dont have an account?</a>
            </div>
        </form>
    </div>
@endsection

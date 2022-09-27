@extends('layouts.layout')

@section('content')
    <div class="content">
        <form method="post" action="{{ route('login.perform') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <h3 class="mb-5 fw-normal text-center">Login</h3>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="floatingName">Email or Username</label>
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            <a href="{{ route('register') }}" class="float-end mt-3">Dont have an account?</a>

        </form>
    </div>
@endsection

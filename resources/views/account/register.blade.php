@extends('layouts.layout')

@section('content')
    <div class="content">
        <form method="post" action="{{ route('register.perform') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <h3 class="mb-5 fw-normal text-center">Register</h3>

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                <label for="floatingEmail">Email address</label>
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="floatingName">Username</label>
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                <label for="floatingConfirmPassword">Confirm Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        </form>
    </div>
@endsection

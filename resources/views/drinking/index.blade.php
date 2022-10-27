@extends('layouts.layout')

@section('content')

    <div class="flex flex-col">
        <h1 class="font-bold text-4xl text-center my-14">Drinking time?</h1>
        <div class="flex flex-row justify-center">
            <div class="w-96 mx-auto text-center">
                <h4 class="font-bold text-3xl mb-4">What to play??</h4>
                <div class="">
                    <a class="hover:text-slate-700" href="/drinking/feeem">feeem</a>
                </div>
                <div class="">
                    <a class="hover:text-slate-700" href="/drinking/shots-hour">1 hour streak</a>
                </div>
            </div>
            <div class="w-96 mx-auto text-center">
                <h4 class="font-bold text-3xl mb-4">What to drink??</h4>
                <div class="">
                    <a class="hover:text-slate-700" href="/drinking/recipes">Recipes</a>
                </div>
            </div>
        </div>
    </div>

@endsection

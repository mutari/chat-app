@extends('layouts.layout')

@section('content')

    <div class="flex justify-center items-center h-full">
        <div id="gameMenu" class="flex flex-col justify-center gap-8">
            <h1 class="font-bold text-4xl">Shots hour</h1>
            <x-button id="startBtn">Start</x-button>
        </div>
        <div id="game" class="hidden">


            <h1 class="font-bold text-8xl">1 hour</h1>

        </div>
    </div>

    <script>

        onReady(() => {

            let menuPanel = document.querySelector('#gameMenu');
            let gamePanel = document.querySelector('#game');

            document.querySelector('#startBtn').addEventListener('click', event => {

                hide(menuPanel);
                show(gamePanel);

                startGame();

            });

            function startGame() {

                let startTimer = setInterval(() => {



                }, 1000);

            }

        })

    </script>

@endsection
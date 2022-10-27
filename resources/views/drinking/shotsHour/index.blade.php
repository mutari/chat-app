@extends('layouts.layout')

@section('content')

    <div class="flex justify-center items-center h-full">
        <div id="gameMenu" class="flex flex-col justify-center gap-8">
            <h1 class="font-bold text-4xl">Shots hour</h1>
            <x-button id="startBtn">Start</x-button>
        </div>
        <div id="game" class="hidden">

            <h1 id="counter" class="font-bold text-8xl">1 hour</h1>

            <div class="fixed bottom-0 right-0 p-4">
                <span id="shotCounter">0/60 shots</span>
            </div>

        </div>
    </div>

    <script>

        onReady(() => {

            const maleDeepCountdown = new Audio('/sound/male-deep-voice-countdown.wav');
            const softCountdown = new Audio('/sound/soft-bell-countdown.wav');
            const iFeelGoodSong = new Audio('/sound/I_Feel_Good.mp3');

            let menuPanel = document.querySelector('#gameMenu');
            let gamePanel = document.querySelector('#game');

            document.querySelector('#startBtn').addEventListener('click', event => {

                hide(menuPanel);
                show(gamePanel);

                startGame();

            });

            function startGame() {

                let counterElement = document.querySelector('#counter');

                let secCounter = 10;
                let startTimer = setInterval(() => {

                    if(secCounter == 10)
                        maleDeepCountdown.play();

                    if(secCounter >= 0)
                        counterElement.innerText = `${secCounter}`

                    if(secCounter < 0) {
                        counterElement.innerText = 'first shot!';
                        clearInterval(startTimer);
                        startShots();
                    }

                    secCounter--;
                }, 1000);

            }

            function startShots() {

                let counterElement = document.querySelector('#counter');
                let shotCounterElement = document.querySelector('#shotCounter');

                const maxShots = 60;
                let shotCounter = 0;
                let secCounter = 0;

                let timer = setInterval(() => {

                    if(shotCounter == 0 && secCounter == 0)
                        counterElement.innerText = 'first shot!';
                    else if(secCounter == 0)
                        counterElement.innerText = 'shot!';
                    else
                        counterElement.innerText = `${60 - secCounter} sec`

                    if((60 - secCounter) == 2)
                        softCountdown.play();

                    secCounter++;

                    if(secCounter > 60) {
                        shotCounterElement.innerText = `${++shotCounter}/${maxShots} shots`;
                        secCounter = 0;
                    }

                    if(shotCounter >= maxShots) {
                        clearInterval(timer);
                        finished();
                    }

                }, 1000)

            }

            function finished() {
                let counterElement = document.querySelector('#counter');
                counterElement.innerText = 'All done fuckers!!!';
                iFeelGoodSong.play();
            }

        })

    </script>

@endsection

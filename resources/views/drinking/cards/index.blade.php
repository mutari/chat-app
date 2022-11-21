@extends('layouts.layout')

@section('head')

    <script src="/js/cards.js"></script>

@endsection

@section('content')

    <div class="h-full flex justify-center items-center flex-col gap-2">

        <div>
            <img id="card_image" src="" alt="">
        </div>

        <div>
            <x-button id="new_card">Generate new card</x-button>
        </div>

        <div id="full_deck" class="flex flex-row">
            <template>
                <div>
                    <img src="" alt="">
                </div>
            </template>
        </div>

    </div>

    <script>

        let cardDeck = new Cards();

        document.querySelector('#new_card').addEventListener('click', event => {
            let card_image = document.querySelector('#card_image');

            if(cardDeck.hasCards()) {
                let card = cardDeck.random();

                card_image.src = card.texture;

                cardDeck.removeCard(card);
            } else {
                card_image.src = '';
            }


            draw();
        })

        draw();

        function draw() {
            let fullDeck = document.querySelector('#full_deck');
            fullDeck.innerHTML = '';

            cardDeck.deck.forEach(card => {
                let div = document.createElement('div');
                let image = document.createElement('img');

                image.src = card.texture;

                div.append(image);

                fullDeck.append(div);
            });
        }

    </script>

@endsection

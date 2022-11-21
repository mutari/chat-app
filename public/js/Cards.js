const cards = [];

class Hands {



}

class Cards {

    constructor(backTexture) {
        this.backTexture = backTexture;

        this.deck = this.#generateCardDeck();
    }

    hasCards() {
        return this.deck.length !== 0
    }

    removeCard(c) {
        this.deck = this.deck.filter(card => card.id != c.id);
    }

    random() {
        return this.deck[Math.floor(Math.random()*this.deck.length)]
    }

    #generateCardDeck() {
        const types = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];

        let deck = [];

        types.forEach(type => {
            deck.push(new Card(`2 of ${type.toLowerCase()}`, `card${type}2`));
            deck.push(new Card(`3 of ${type.toLowerCase()}`, `card${type}3`));
            deck.push(new Card(`4 of ${type.toLowerCase()}`, `card${type}4`));
            deck.push(new Card(`5 of ${type.toLowerCase()}`, `card${type}5`));
            deck.push(new Card(`6 of ${type.toLowerCase()}`, `card${type}6`));
            deck.push(new Card(`7 of ${type.toLowerCase()}`, `card${type}7`));
            deck.push(new Card(`8 of ${type.toLowerCase()}`, `card${type}8`));
            deck.push(new Card(`9 of ${type.toLowerCase()}`, `card${type}9`));
            deck.push(new Card(`10 of ${type.toLowerCase()}`, `card${type}10`));
            deck.push(new Card(`A of ${type.toLowerCase()}`, `card${type}A`));
            deck.push(new Card(`J of ${type.toLowerCase()}`, `card${type}J`));
            deck.push(new Card(`Q of ${type.toLowerCase()}`, `card${type}Q`));
            deck.push(new Card(`K of ${type.toLowerCase()}`, `card${type}K`));
        });

        return deck;
    }

}

class Card {
    #texture;

    constructor(title, texture) {
        this.#texture = texture;
        this.title = title;
        this.id = randomStr(10);
    }

    get texture() {
        return `/images/cards/${this.#texture}.png`;
    }

}

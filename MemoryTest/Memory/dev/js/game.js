const card = document.querySelectorAll(".memory");
card.forEach(card => card.addEventListener('click', flipCard));


let isFlipped = false;
let cardFirst, cardSecond;
let points = 0;
let bonusPoints = 0;
let correctMultiple = 0;

//flips the card
function flipCard() {
    if (this === cardFirst) return;
    this.classList.toggle('flip');
    if (!isFlipped) {
        isFlipped = true;
        cardFirst = this;
        return;
    }
    isFlipped = false;
    cardSecond = this;
    console.log(cardFirst.dataset.card);
    console.log(cardSecond.dataset.card);
    checkMatch();
}

//checks if the data of the card is the same
function checkMatch() {
    let match = cardFirst.dataset.card === cardSecond.dataset.card
    match ? disableCard() : flipBack();
}

//disables the card if they're a match
function disableCard() {
    cardFirst.removeEventListener('click', flipCard);
    cardSecond.removeEventListener('click', flipCard);

    points += 10;
    correctMultiple++;
    streak();
    pointsDisplay();
    console.log(points, bonusPoints, correctMultiple);
}

//flips them back if they don't match
function flipBack() {
    setTimeout(() => {
    cardFirst.classList.remove('flip');
    cardSecond.classList.remove('flip');
    },500)
    points -= 3;
    if (points < 0) {
        points = 0;
    }
    correctMultiple = 0;
    pointsDisplay();
}


//displays the points
function pointsDisplay() {
    const pointsSection = document.querySelector('.points');
    pointsSection.innerHTML = '';   
    const pointsElement = document.createElement('h3');
    pointsElement.textContent = `Points: ${points}`;
    pointsSection.appendChild(pointsElement);
}

function streak() {
    if (correctMultiple > 1) {
        bonusPoints = 5;
        points = points + bonusPoints;
    } else {
        bonusPoints = 0;
    } 
}

//restart the game
const restart = document.querySelectorAll(".Restart");
restart.forEach(button => button.addEventListener('click', gameRestart));

function gameRestart() {
    card.forEach(card => card.classList.remove('flip'));
    card.forEach(card => card.addEventListener('click', flipCard));
    shuffle();
    correctMultiple = 0;
    pointsDisplay(points = 0);
}

//shuffles the card
function shuffle() {
    card.forEach(card => {
        let random = Math.floor(Math.random() * 20);
        card.style.order = random;
    });
}

shuffle();




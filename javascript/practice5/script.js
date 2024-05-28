const choices = document.querySelectorAll('.choice');
const resultMessage = document.getElementById('resultMessage');
const restartButton = document.getElementById('restartButton');

const CHOICES = ['rock', 'paper', 'scissors'];

choices.forEach(choice => choice.addEventListener('click', handleChoice));
restartButton.addEventListener('click', restartGame);

function handleChoice(event) {
    const playerChoice = event.target.getAttribute('data-choice');
    const computerChoice = getComputerChoice();
    const winner = determineWinner(playerChoice, computerChoice);

    displayResult(playerChoice, computerChoice, winner);
}

function getComputerChoice() {
    const randomIndex = Math.floor(Math.random() * CHOICES.length);
    return CHOICES[randomIndex];
}

function determineWinner(player, computer) {
    if (player === computer) {
        return 'draw';
    }

    if (
        (player === 'rock' && computer === 'scissors') ||
        (player === 'paper' && computer === 'rock') ||
        (player === 'scissors' && computer === 'paper')
    ) {
        return 'player';
    } else {
        return 'computer';
    }
}

function displayResult(playerChoice, computerChoice, winner) {
    if (winner === 'draw') {
        resultMessage.textContent = `It's a draw! You both chose ${playerChoice}.`;
    } else if (winner === 'player') {
        resultMessage.textContent = `You win! ${playerChoice} beats ${computerChoice}.`;
    } else {
        resultMessage.textContent = `You lose! ${computerChoice} beats ${playerChoice}.`;
    }
}

function restartGame() {
    resultMessage.textContent = '';
}

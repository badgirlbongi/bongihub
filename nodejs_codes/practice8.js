const readline = require('readline');

// Function to generate a random number between min and max (inclusive)
function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

// Initialize readline interface
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

// Generate a random number between 1 and 100
const randomNumber = getRandomNumber(1, 100);

// Function to start the game
function startGame() {
    console.log("Welcome to the Guessing Game!");
    console.log("I've picked a number between 1 and 100. Try to guess it!");
    askForGuess();
}

// Function to ask for player's guess
function askForGuess() {
    rl.question("Enter your guess: ", (guess) => {
        // Parse the guess as an integer
        const guessNumber = parseInt(guess);

        // Check if the guess is valid
        if (isNaN(guessNumber)) {
            console.log("Please enter a valid number.");
            askForGuess();
            return;
        }

        // Check if the guess is correct
        if (guessNumber === randomNumber) {
            console.log("Congratulations! You've guessed the correct number!");
            rl.close();
            return;
        }

        // Provide feedback on the guess
        if (guessNumber < randomNumber) {
            console.log("Too low! Try again.");
        } else {
            console.log("Too high! Try again.");
        }

        // Ask for the next guess
        askForGuess();
    });
}

// Start the game
startGame();

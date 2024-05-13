const readline = require('readline');

// Initialize readline interface
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

// Function to choose a random word from an array
function chooseRandomWord() {
    const words = ["apple", "banana", "orange", "strawberry", "pineapple", "watermelon"];
    return words[Math.floor(Math.random() * words.length)];
}

// Function to display the hangman word with guessed letters revealed
function displayHangmanWord(word, guessedLetters) {
    let display = '';
    for (const letter of word) {
        if (guessedLetters.includes(letter)) {
            display += letter + ' ';
        } else {
            display += '_ ';
        }
    }
    console.log(display);
}

// Function to start the game
function startGame() {
    console.log("Welcome to Hangman!");

    // Choose a random word
    const word = chooseRandomWord();
    const maxAttempts = 6;
    let guessedLetters = [];
    let attempts = 0;

    // Main game loop
    function makeGuess() {
        console.log(`Attempts left: ${maxAttempts - attempts}`);
        displayHangmanWord(word, guessedLetters);

        rl.question("Enter a letter: ", (input) => {
            const letter = input.trim().toLowerCase();

            // Check if the letter has already been guessed
            if (guessedLetters.includes(letter)) {
                console.log("You've already guessed that letter. Try again.");
                makeGuess();
                return;
            }

            // Add the letter to the guessed letters
            guessedLetters.push(letter);

            // Check if the letter is in the word
            if (word.includes(letter)) {
                console.log("Correct guess!");
            } else {
                console.log("Incorrect guess!");
                attempts++;
            }

            // Check if the player has won or lost
            if (word.split('').every(letter => guessedLetters.includes(letter))) {
                console.log(`Congratulations! You've guessed the word: ${word}`);
                rl.close();
            } else if (attempts >= maxAttempts) {
                console.log("Sorry, you've run out of attempts. The word was: " + word);
                rl.close();
            } else {
                // Continue the game
                makeGuess();
            }
        });
    }

    // Start the game
    makeGuess();
}

// Start the game
startGame();

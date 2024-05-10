const readline = require('readline');

// Initialize readline interface
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

// Initialize the tic-tac-toe board
let board = [
    ['_', '_', '_'],
    ['_', '_', '_'],
    ['_', '_', '_']
];

// Function to display the current state of the board
function displayBoard() {
    console.log('  1 2 3');
    for (let i = 0; i < 3; i++) {
        console.log(`${i + 1} ${board[i].join(' ')}`);
    }
}

// Function to check if a player has won
function checkWin(player) {
    // Check rows
    for (let i = 0; i < 3; i++) {
        if (board[i][0] === player && board[i][1] === player && board[i][2] === player) {
            return true;
        }
    }

    // Check columns
    for (let i = 0; i < 3; i++) {
        if (board[0][i] === player && board[1][i] === player && board[2][i] === player) {
            return true;
        }
    }

    // Check diagonals
    if ((board[0][0] === player && board[1][1] === player && board[2][2] === player) ||
        (board[0][2] === player && board[1][1] === player && board[2][0] === player)) {
        return true;
    }

    return false;
}

// Function to check if the board is full
function boardFull() {
    for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
            if (board[i][j] === '_') {
                return false;
            }
        }
    }
    return true;
}

// Function to start the game
function startGame() {
    console.log("Welcome to Tic-Tac-Toe!");
    console.log("Player 1 will use 'X', and Player 2 will use 'O'.");
    displayBoard();
    playTurn('X');
}

// Function to play a turn
function playTurn(player) {
    rl.question(`Player ${player}'s turn. Enter row and column (e.g., 1 2): `, (input) => {
        const [row, col] = input.split(' ').map(coord => parseInt(coord) - 1);

        // Check if the input is valid
        if (isNaN(row) || isNaN(col) || row < 0 || row > 2 || col < 0 || col > 2 || board[row][col] !== '_') {
            console.log("Invalid input. Try again.");
            playTurn(player);
            return;
        }

        // Update the board with the player's move
        board[row][col] = player;
        displayBoard();

        // Check if the player has won or if the game is a draw
        if (checkWin(player)) {
            console.log(`Player ${player} wins! Congratulations!`);
            rl.close();
        } else if (boardFull()) {
            console.log("It's a draw!");
            rl.close();
        } else {
            // Switch to the other player's turn
            playTurn(player === 'X' ? 'O' : 'X');
        }
    });
}

// Start the game
startGame();

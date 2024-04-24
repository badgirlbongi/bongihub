// Importing the built-in 'readline' module to get user input
const readline = require('readline');

// Creating an interface to read user input from the terminal
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

// Function to generate and print a random number
function generateRandomNumber() {
  // Generate a random number between 1 and 10
  const randomNumber = Math.floor(Math.random() * 10) + 1;

  // Print the random number to the console
  console.log("Random Number:", randomNumber);

  // Close the readline interface
  rl.close();
}




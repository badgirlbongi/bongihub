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

// Ask the user if they want to generate a random number
rl.question('Do you want to generate a random number between 1 and 10? (yes/no): ', (answer) => {
  // If the user answers 'yes', generate and print a random number
  if (answer.toLowerCase() === 'yes') {
    generateRandomNumber();
  } 
  // If the user answers 'no', simply exit
  else if (answer.toLowerCase() === 'no') {
    console.log("Okay, goodbye!");
    rl.close();
  } 
  // If the user gives an invalid input, display an error message
  else {
    console.log("Invalid input. Please answer 'yes' or 'no'.");
    // Ask the question again recursively until a valid input is provided
    rl.question('Do you want to generate a random number between 1 and 10? (yes/no): ', (answer) => {
      if (answer.toLowerCase() === 'yes') {
        generateRandomNumber();
        
      } else if (answer.toLowerCase() === 'no') {
        console.log("Okay, goodbye!");
        rl.close();
      } else {
        console.log("Invalid input again. Exiting...");
        rl.close();
      }
    });
  }
});

// Importing necessary modules
const readline = require('readline');

// Creating interface for user input
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

// Function to perform arithmetic operations
function calculate(operator, num1, num2) {
    switch(operator) {
        case '+':
            return num1 + num2;
        case '-':
            return num1 - num2;
        case '*':
            return num1 * num2;
        case '/':
            if (num2 === 0) {
                return "Cannot divide by zero!";
            } else {
                return num1 / num2;
            }
        default:
            return "Invalid operator!";
    }
}

// Prompting user for input
rl.question('Enter the operation (e.g., 2 + 3): ', (input) => {
    const [num1, operator, num2] = input.split(' ');
    const result = calculate(operator, parseFloat(num1), parseFloat(num2));
    console.log(`Result: ${result}`);
    rl.close();
});

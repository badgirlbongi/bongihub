const chalk = require('chalk');

// Example output with colors
console.log(chalk.red('This is red text'));
console.log(chalk.green('This is green text'));
console.log(chalk.blue('This is blue text'));
console.log(chalk.yellow('This is yellow text'));
console.log(chalk.magenta('This is magenta text'));
console.log(chalk.cyan('This is cyan text'));

// You can also chain styles and colors
console.log(chalk.red.bold('This is bold red text'));
console.log(chalk.bgBlue.white('This is blue background with white text'));

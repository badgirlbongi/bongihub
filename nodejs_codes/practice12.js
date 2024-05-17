const inquirer = require('inquirer');

class Game {
    constructor() {
        this.state = {
            health: 100,
            inventory: [],
        };
    }

    async start() {
        console.log("Welcome to the Dungeon Adventure!");
        await this.mainMenu();
    }

    async mainMenu() {
        const choices = [
            'Explore the dungeon',
            'Check inventory',
            'Rest',
            'Quit game',
        ];

        const answer = await inquirer.prompt({
            name: 'action',
            type: 'list',
            message: 'What would you like to do?',
            choices: choices,
        });

        switch (answer.action) {
            case 'Explore the dungeon':
                await this.explore();
                break;
            case 'Check inventory':
                this.checkInventory();
                break;
            case 'Rest':
                this.rest();
                break;
            case 'Quit game':
                this.quit();
                return;
        }

        await this.mainMenu();
    }

    async explore() {
        const scenarios = [
            'You encounter a wild beast!',
            'You find a hidden treasure chest.',
            'You fall into a trap.',
            'You meet a wandering merchant.',
        ];

        const scenario = scenarios[Math.floor(Math.random() * scenarios.length)];
        console.log(scenario);

        switch (scenario) {
            case 'You encounter a wild beast!':
                await this.fight();
                break;
            case 'You find a hidden treasure chest.':
                this.findTreasure();
                break;
            case 'You fall into a trap.':
                this.fallIntoTrap();
                break;
            case 'You meet a wandering merchant.':
                await this.meetMerchant();
                break;
        }
    }

    async fight() {
        const result = Math.random();
        if (result > 0.5) {
            console.log("You defeated the beast!");
            this.state.inventory.push('beast trophy');
        } else {
            console.log("You got injured in the fight!");
            this.state.health -= 20;
        }
        this.checkHealth();
    }

    findTreasure() {
        console.log("You found a potion!");
        this.state.inventory.push('potion');
    }

    fallIntoTrap() {
        console.log("You fell into a trap and lost some health!");
        this.state.health -= 15;
        this.checkHealth();
    }

    async meetMerchant() {
        const choices = [
            'Buy health potion (10 gold)',
            'Sell beast trophy (5 gold)',
            'Leave',
        ];

        const answer = await inquirer.prompt({
            name: 'action',
            type: 'list',
            message: 'What would you like to do?',
            choices: choices,
        });

        switch (answer.action) {
            case 'Buy health potion (10 gold)':
                this.buyPotion();
                break;
            case 'Sell beast trophy (5 gold)':
                this.sellTrophy();
                break;
            case 'Leave':
                break;
        }
    }

    buyPotion() {
        if (this.state.inventory.includes('gold')) {
            console.log("You bought a health potion.");
            this.state.inventory.push('health potion');
        } else {
            console.log("You don't have enough gold.");
        }
    }

    sellTrophy() {
        const index = this.state.inventory.indexOf('beast trophy');
        if (index > -1) {
            console.log("You sold a beast trophy.");
            this.state.inventory.splice(index, 1);
            this.state.inventory.push('gold');
        } else {
            console.log("You don't have a beast trophy to sell.");
        }
    }

    rest() {
        console.log("You take a rest and recover some health.");
        this.state.health += 10;
    }

    checkInventory() {
        console.log("Your inventory:", this.state.inventory);
    }

    checkHealth() {
        if (this.state.health <= 0) {
            console.log("You have died. Game over.");
            process.exit();
        } else {
            console.log(`Your health: ${this.state.health}`);
        }
    }

    quit() {
        console.log("Thank you for playing!");
        process.exit();
    }
}

const game = new Game();
game.start();

const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

// Define rooms
const rooms = {
  'kitchen': {
    description: 'You are in a messy kitchen. There is a table and a fridge here.',
    items: ['knife', 'apple']
  },
  'livingRoom': {
    description: 'You are in a cozy living room with a fireplace.',
    items: ['matches']
  }
  // Add more rooms as needed
};

// Define player inventory
let inventory = [];

// Current room
let currentRoom = 'kitchen';

// Function to display current room description and items
function displayRoom() {
  console.log(rooms[currentRoom].description);
  console.log('Items in the room:', rooms[currentRoom].items.join(', '));
}

// Function to display player inventory
function displayInventory() {
  console.log('Inventory:', inventory.join(', '));
}

// Function to handle player input
function handleInput(input) {
  const action = input.trim().toLowerCase();
  if (action === 'look') {
    displayRoom();
  } else if (action === 'inventory') {
    displayInventory();
  } else if (action.startsWith('go ')) {
    const direction = action.substring(3);
    if (rooms[currentRoom].exits && rooms[currentRoom].exits[direction]) {
      currentRoom = rooms[currentRoom].exits[direction];
      displayRoom();
    } else {
      console.log('You cannot go that way.');
    }
  } else if (action.startsWith('take ')) {
    const item = action.substring(5);
    if (rooms[currentRoom].items.includes(item)) {
      inventory.push(item);
      rooms[currentRoom].items = rooms[currentRoom].items.filter(i => i !== item);
      console.log(`You took the ${item}.`);
    } else {
      console.log(`There is no ${item} here.`);
    }
  } else {
    console.log('Invalid command.');
  }
  rl.prompt();
}

// Initial prompt
rl.prompt();
displayRoom();

// Event listener for player input
rl.on('line', (input) => {
  handleInput(input);
});

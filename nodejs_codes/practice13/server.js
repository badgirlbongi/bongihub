const express = require('express');
const http = require('http');
const WebSocket = require('ws');

const app = express();
const server = http.createServer(app);
const wss = new WebSocket.Server({ server });

let players = [];
let choices = {};

// Function to determine the winner
function getWinner(player1Choice, player2Choice) {
  if (player1Choice === player2Choice) {
    return 'Draw';
  }
  if (
    (player1Choice === 'rock' && player2Choice === 'scissors') ||
    (player1Choice === 'scissors' && player2Choice === 'paper') ||
    (player1Choice === 'paper' && player2Choice === 'rock')
  ) {
    return 'Player 1 wins!';
  } else {
    return 'Player 2 wins!';
  }
}

// Function to broadcast a message to all connected clients
function broadcast(data) {
  wss.clients.forEach(client => {
    if (client.readyState === WebSocket.OPEN) {
      client.send(JSON.stringify(data));
    }
  });
}

wss.on('connection', ws => {
  // Add player if there are less than 2 players connected
  if (players.length < 2) {
    players.push(ws);
    ws.send(JSON.stringify({ type: 'init', player: players.length }));

    // Start the game if there are 2 players
    if (players.length === 2) {
      broadcast({ type: 'start' });
    }

    // Handle messages from clients
    ws.on('message', message => {
      const data = JSON.parse(message);
      if (data.type === 'choice' && players.includes(ws)) {
        choices[data.player] = data.choice;
        if (choices[1] && choices[2]) {
          const result = getWinner(choices[1], choices[2]);
          broadcast({ type: 'result', choices, result });
          choices = {};
        }
      }
    });

    // Handle player disconnection
    ws.on('close', () => {
      players = players.filter(player => player !== ws);
      choices = {};
      broadcast({ type: 'reset' });
    });
  } else {
    ws.send(JSON.stringify({ type: 'full' }));
  }
});

// Serve static files from the "public" directory
app.use(express.static('public'));

// Start the server on port 8080
server.listen(8080, () => {
  console.log('Server is listening on port 8080');
});

// server.js
const express = require('express');
const http = require('http');
const WebSocket = require('ws');

const app = express();
const server = http.createServer(app);
const wss = new WebSocket.Server({ server });

let players = [];
let choices = {};

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

function broadcast(data) {
  wss.clients.forEach(client => {
    if (client.readyState === WebSocket.OPEN) {
      client.send(JSON.stringify(data));
    }
  });
}

wss.on('connection', ws => {
  if (players.length < 2) {
    players.push(ws);
    ws.send(JSON.stringify({ type: 'init', player: players.length }));

    if (players.length === 2) {
      broadcast({ type: 'start' });
    }

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

    ws.on('close', () => {
      players = players.filter(player => player !== ws);
      choices = {};
      broadcast({ type: 'reset' });
    });
  } else {
    ws.send(JSON.stringify({ type: 'full' }));
  }
});

app.use(express.static('public'));

server.listen(

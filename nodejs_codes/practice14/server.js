// server.js
const express = require('express');
const http = require('http');
const WebSocket = require('ws');

const app = express();
const server = http.createServer(app);
const wss = new WebSocket.Server({ server });

let players = [];
let currentPlayerIndex = 0;
let usedWords = [];
let lastLetter = '';
let timer = null;

function resetGame() {
  currentPlayerIndex = 0;
  usedWords = [];
  lastLetter = '';
  clearTimeout(timer);
}

function startTurn() {
  clearTimeout(timer);
  timer = setTimeout(() => {
    wss.clients.forEach(client => {
      if (client.readyState === WebSocket.OPEN) {
        client.send(JSON.stringify({ type: 'timeout', player: players[currentPlayerIndex] }));
      }
    });
    players.splice(currentPlayerIndex, 1);
    if (players.length > 1) {
      startTurn();
    } else {
      resetGame();
      broadcast({ type: 'reset' });
    }
  }, 15000);
}

function broadcast(data) {
  wss.clients.forEach(client => {
    if (client.readyState === WebSocket.OPEN) {
      client.send(JSON.stringify(data));
    }
  });
}

wss.on('connection', ws => {
  if (players.length < 4) {
    players.push(ws);
    ws.send(JSON.stringify({ type: 'init', player: players.length }));

    if (players.length === 2) {
      broadcast({ type: 'start' });
      startTurn();
    }

    ws.on('message', message => {
      const data = JSON.parse(message);
      if (data.type === 'word' && players[currentPlayerIndex] === ws) {
        if (data.word[0] === lastLetter || lastLetter === '') {
          if (!usedWords.includes(data.word)) {
            usedWords.push(data.word);
            lastLetter = data.word[data.word.length - 1];
            broadcast({ type: 'word', word: data.word, player: players.indexOf(ws) + 1 });
            currentPlayerIndex = (currentPlayerIndex + 1) % players.length;
            startTurn();
          } else {
            ws.send(JSON.stringify({ type: 'invalid', message: 'Word has already been used' }));
          }
        } else {
          ws.send(JSON.stringify({ type: 'invalid', message: 'Word does not start with the correct letter' }));
        }
      }
    });

    ws.on('close', () => {
      players = players.filter(player => player !== ws);
      if (players.length < 2) {
        resetGame();
        broadcast({ type: 'reset' });
      } else {
        if (currentPlayerIndex >= players.length) {
          currentPlayerIndex = 0;
        }
        startTurn();
      }
    });
  } else {
    ws.send(JSON.stringify({ type: 'full' }));
  }
});

app.use(express.static('public'));

server.listen(8080, () => {
  console.log('Server is listening on port 8080');
});

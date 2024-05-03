// Import required modules
const axios = require('axios');

// Function to fetch a Chuck Norris joke
async function fetchChuckNorrisJoke() {
  try {
    const response = await axios.get('https://api.chucknorris.io/jokes/random');
    return response.data.value; // Extract the joke from the response
  } catch (error) {
    console.error('Error fetching Chuck Norris joke:', error.message);
    return null;
  }
}

// Function to log a Chuck Norris joke to the console
async function logChuckNorrisJoke() {
  const joke = await fetchChuckNorrisJoke();
  if (joke) {
    console.log('Chuck Norris joke:', joke);
  } else {
    console.log('Failed to fetch Chuck Norris joke.');
  }
}

// Log a Chuck Norris joke every 5 seconds
setInterval(logChuckNorrisJoke, 5000);

const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

// Set up body-parser middleware
app.use(bodyParser.urlencoded({ extended: true }));

// Serve static files from the public directory
app.use(express.static('public'));

// Set EJS as the templating engine
app.set('view engine', 'ejs');

// Define a route for the homepage
app.get('nodejs_codes/practice7', (req, res) => {
  res.render('index');
});

// Define a route for form submission
app.post('nodejs_codes/practice7/views', (req, res) => {
  const name = req.body.name;
  res.render('greet', { name });
});

// Start the server
app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});

// Import required modules
const mongoose = require('mongoose');

// Connect to MongoDB database
mongoose.connect('mongodb://localhost:27017/myapp', {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

// Define a schema
const Schema = mongoose.Schema;
const personSchema = new Schema({
  name: String,
  age: Number,
});

// Define a model
const Person = mongoose.model('Person', personSchema);

// Create a new person document
const john = new Person({ name: 'John Doe', age: 30 });

// Save the document to the database
john.save(function (err, person) {
  if (err) return console.error(err);
  console.log('Person saved to database:', person);
});

// Find all people in the database
Person.find(function (err, people) {
  if (err) return console.error(err);
  console.log('All people in the database:', people);
});

// Find people named John
Person.find({ name: 'John Doe' }, function (err, people) {
  if (err) return console.error(err);
  console.log('People named John:', people);
});

// Update a person's age
Person.updateOne({ name: 'John Doe' }, { age: 31 }, function (err, result) {
  if (err) return console.error(err);
  console.log('Updated John Doe:', result);
});

// Delete a person
Person.deleteOne({ name: 'John Doe' }, function (err) {
  if (err) return console.error(err);
  console.log('John Doe deleted');
});

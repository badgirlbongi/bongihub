<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tourza_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sqlCreateDB) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($database);

// Create table
$queryCreateTable = "CREATE TABLE IF NOT EXISTS place_ratings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    place_id INT,
    rating FLOAT,
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

if ($conn->query($queryCreateTable) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($queryCreateTable) === TRUE) {
    // Table created successfully or already exists
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();

?>


<?php

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourza_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//create tables
$queryCreateTables = "
    CREATE TABLE place_ratings (
        id INT AUTO_INCREMENT PRIMARY KEY,
        rating INT
    );";

if ($conn->multi_query($queryCreateTables)) {
    echo "Table created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

//close connection
$conn->close();

?>
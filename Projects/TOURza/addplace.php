<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data to be inserted
$placeID = "your_place_id";
$placeName = "Your Place Name";
$placePicture = "path/to/your/image.jpg"; // Replace with the actual path or handle file upload
$placeDescription = "Your place description";
$placeLink = "Your place link";
$provinceID = "your_province_id";


$imageContent = file_get_contents($placePicture);

// SQL query to insert data into the 'place' table
$sql = "INSERT INTO `place` 
        (`placeID`, `placeName`, `placePicture`, `placeDescription`, `placeLink`, `provinceID`) 
        VALUES 
        ('$placeID', '$placeName', ?, '$placeDescription', '$placeLink', '$provinceID')";

// Use prepared statement to bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $imageContent);

// Execute the query
if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>

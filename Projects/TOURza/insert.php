<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imagetest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $placeID = $_POST["placeID"];
    $placeName = $_POST["placeName"];
    $placeDescription = $_POST["placeDescription"];
    $placeLink = $_POST["placeLink"];
    $provinceID = $_POST["provinceID"];

    // Check if a file is uploaded
    if (isset($_FILES["placePicture"])) {
        $placePicture = $_FILES["placePicture"]["tmp_name"];
        $imageContent = file_get_contents($placePicture);
    } else {
        // Handle the case where no file is uploaded 
        $imageContent = "upload an image"; 
    }

    // SQL query to insert data into the 'place' table
    $sql = "INSERT INTO `place` 
            (`placeID`, `placeName`, `placePicture`, `placeDescription`, `placeLink`, `provinceID`) 
            VALUES 
            (?, ?, ?, ?, ?, ?)";

    // Use prepared statement to bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssbsss", $placeID, $placeName, $imageContent, $placeDescription, $placeLink, $provinceID);

    // Execute the query
    if ($stmt->execute()) {
        // Store inserted data in session variables
        session_start();
        $_SESSION['placeID'] = $placeID;
        $_SESSION['placeName'] = $placeName;
        $_SESSION['placeDescription'] = $placeDescription;
        $_SESSION['placeLink'] = $placeLink;
        $_SESSION['provinceID'] = $provinceID;

        // Redirect to confirmation page
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

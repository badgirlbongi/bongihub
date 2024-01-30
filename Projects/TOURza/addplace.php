
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
        // Handle the case where no file is uploaded (you might want to set a default image)
        $imageContent = ""; // Replace with your default image content or handle accordingly
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
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
    Place ID: <input type="text" name="placeID" required><br>
    Place Name: <input type="text" name="placeName" required><br>
    Place Picture: <input type="file" name="placePicture" accept="image/*" required><br>
    Place Description: <textarea name="placeDescription" required></textarea><br>
    Place Link: <input type="text" name="placeLink" required><br>
    Province ID: <input type="text" name="provinceID" required><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

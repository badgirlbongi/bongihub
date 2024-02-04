<?php

$dsn = 'mysql:host=localhost;dbname=tourza';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$table = 'place';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $placeID = $_POST["placeID"];
    $placeName = $_POST["placeName"];
    $placeDescription = $_POST["placeDescription"];
    $placeLink = $_POST["placeLink"];
    $provinceID = $_POST["provinceID"];

    // SQL query to insert data into the 'place' table
    $sql = "INSERT INTO `place` 
            (`placeID`, `placeName`, `placeDescription`, `placeLink`, `provinceID`) 
            VALUES 
            (:placeID, :placeName, :placeDescription, :placeLink, :provinceID)";

    // Use prepared statement to bind parameters
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":placeID", $placeID, PDO::PARAM_STR);
    $stmt->bindParam(":placeName", $placeName, PDO::PARAM_STR);
    $stmt->bindParam(":placeDescription", $placeDescription, PDO::PARAM_STR);
    $stmt->bindParam(":placeLink", $placeLink, PDO::PARAM_STR);
    $stmt->bindParam(":provinceID", $provinceID, PDO::PARAM_STR);

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
        echo "Error inserting data: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
}

$pdo = null;
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

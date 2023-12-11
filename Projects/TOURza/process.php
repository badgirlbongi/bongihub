<?php

//for ratings
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

if (isset($_POST['submit_rating'])) {
    if (isset($_POST['rating'])) {
        $rating = $_POST['rating'];

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO place_ratings (rating) VALUES (?)");
        $stmt->bind_param("i", $rating);

        // Execute the query
        $stmt->execute();
        $stmt->close();

        // Retrieve all ratings from the database
        $sql = "SELECT rating FROM place_ratings";
        $result = $conn->query($sql);

        // Calculate average rating
        $totalRatings = $result->num_rows;
        $sumRatings = 0;

        while ($row = $result->fetch_assoc()) {
            $sumRatings += $row['rating'];
        }

        $averageRating = $totalRatings > 0 ? $sumRatings / $totalRatings : 0;

        echo "Average Rating: " . number_format($averageRating, 2);
    } else {
        echo "Please select a rating!";
    }
}

$conn->close();


?>

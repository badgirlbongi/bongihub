<?php
// Establish database connection

$mysqli = new mysqli('localhost','root','','tourza') or die ($mysqli->connect_error);
$table = 'rating';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['rateValue']) && isset($_POST['comment'])) {
        $rating = $_POST['rateValue'];
        $comment = $_POST['rateComment'];
        $placeID = $_POST['placeID'];

        // Prepare and bind the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO $table (ratingValue, rateComment, placeID) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $rating, $comment, $placeID);

        // Execute the query
        $stmt->execute();
        $stmt->close();

        // Retrieve all ratings from the database
        $sql = "SELECT ratingValue FROM $table"; 
        $result = $mysqli->query($sql);

        // Calculate average rating
        $totalRatings = $result->num_rows;
        $sumRatings = 0;

        while ($row = $result->fetch_assoc()) {
            $sumRatings += $row['ratingValue']; // Update column name
        }

        $averageRating = $totalRatings > 0 ? $sumRatings / $totalRatings : 0;

        echo "Average Rating: " . number_format($averageRating, 2);
    } else {
        echo "Please select a rating and add a comment!";
    }
}

$mysqli->close();
?>


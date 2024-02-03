<?php
// Establish database connection

$mysqli = new mysqli('localhost','root','','tourza') or die ($mysqli->connect_error);
$table = 'rating';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ratingValue']) && isset($_POST['rateComment'])) {
        $rating = $_POST['ratingValue'];
        $comment = $_POST['rateComment'];

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


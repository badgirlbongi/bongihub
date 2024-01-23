<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourza"; // Update to the correct database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['rating']) && isset($_POST['comment'])) {
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO rating (ratingValue, rateComment) VALUES (?, ?)");
        $stmt->bind_param("is", $rating, $comment);

        // Execute the query
        $stmt->execute();
        $stmt->close();

        // Retrieve all ratings from the database
        $sql = "SELECT ratingValue FROM rating"; // Update table and column names
        $result = $conn->query($sql);

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

$conn->close();
?>

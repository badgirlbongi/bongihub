<?php
// Establish database connection

$dsn = 'mysql:host=localhost;dbname=tourza';
$username = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$table = 'rating';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['rateValue']) && isset($_POST['comment'])) {
        $rating = $_POST['rateValue'];
        $comment = $_POST['rateComment'];
        $placeID = $_POST['placeID'];

        // Prepare and bind the SQL statement
        $stmt = $pdo->prepare("INSERT INTO $table (ratingValue, rateComment, placeID) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $rating, PDO::PARAM_INT);
        $stmt->bindParam(2, $comment, PDO::PARAM_STR);
        $stmt->bindParam(3, $placeID, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();
        $stmt->closeCursor();

        // Retrieve all ratings from the database
        $sql = "SELECT ratingValue FROM $table";
        $result = $pdo->query($sql);

        // Calculate average rating
        $totalRatings = $result->rowCount();
        $sumRatings = 0;

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $sumRatings += $row['ratingValue']; // Update column name
        }

        $averageRating = $totalRatings > 0 ? $sumRatings / $totalRatings : 0;

        echo "Average Rating: " . number_format($averageRating, 2);
    } else {
        echo "Please select a rating and add a comment!";
    }
}

$pdo = null;
?>

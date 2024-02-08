<?php
require_once 'db.php'; // Include or require the db.php file to access the Database class

$table = 'rating';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Instantiate the Database class
    $db = new Database();

    if (isset($_POST['rateValue']) && isset($_POST['comment'])) {
        $rating = $_POST['rateValue'];
        $comment = $_POST['comment'];
        $placeID = $_POST['placeID'];

        // Prepare and bind the SQL statement
        $stmt = $db->prepare("INSERT INTO $table (ratingValue, rateComment, placeID) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $rating, PDO::PARAM_INT);
        $stmt->bindParam(2, $comment, PDO::PARAM_STR);
        $stmt->bindParam(3, $placeID, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();
        $stmt->closeCursor();

        // Use JavaScript to display the pop-up message
        echo "Comment and Rate submitted successfully";
    } else {
        // Use JavaScript to display the error message
        echo "Please select a rating and add a comment!";
    }

    // Close the database connection
    $db->closeConnection();
}
?>

<?php
include 'db.php'; 

$table = 'rating';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
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
        echo "Comment and Rate submitted successfully";
    } else {
        
        echo "Please select a rating and add a comment!";
    }
    $db->closeConnection();
}
?>
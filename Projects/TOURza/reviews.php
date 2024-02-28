<?php
include 'db.php'; 

$table = 'rating';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $db = new Database();

    if (isset($_POST['rateValue']) && isset($_POST['comment']) && isset($_POST['placeID'])) {
        $rating = $_POST['rateValue'];
        $comment = $_POST['comment'];
        $placeID = $_POST['placeID'];

        // Prepare and bind the SQL statement to insert a new rating record
        $stmt = $db->prepare("INSERT INTO $table (ratingValue, rateComment, placeID) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $rating, PDO::PARAM_INT);
        $stmt->bindParam(2, $comment, PDO::PARAM_STR);
        $stmt->bindParam(3, $placeID, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();
        $stmt->closeCursor();

        echo "Rating submitted successfully";
    } else {
        
        echo "Please select a rating and add a comment!";
    }

    $db->closeConnection();
}
?>

Mbombela, previously known as Nelspruit, serves as the capital of Mpumalanga province in South Africa. It's a vibrant city nestled in the heart of the region, renowned for its accessibility to nearby natural attractions like the Kruger National Park, Sudwala Caves, and the scenic Panorama Route. As a central hub, Mbombela boasts modern amenities, shopping centers, and a diverse culinary scene. The city's strategic location makes it a popular gateway for tourists exploring Mpumalanga's natural wonders, and its lively atmosphere reflects a blend of urban convenience with the stunning natural beauty that characterizes the province. Mbombela also hosts cultural events, markets, and showcases the rich heritage of the region, making it a dynamic and inviting destination for travelers.

https://www.southafrica.net/gl/en/travel/category/places-to-go/big-city-life/mbombela 

mbombela
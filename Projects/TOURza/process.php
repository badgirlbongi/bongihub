<?php

//contact us
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data and sanitize inputs
    $userName = htmlspecialchars($_POST["userName"]);
    $email = htmlspecialchars($_POST["email"]);
    $rating = $_POST["rating"];
    $comment = htmlspecialchars($_POST["comment"]);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Store the review in a file
    $reviewData = "Review by: $userName\nEmail: $email\nRating: $rating stars\nComment: $comment\n\n";
    $file = 'tourzaReview.txt';
    file_put_contents($file, $reviewData, FILE_APPEND | LOCK_EX);

    echo "Review submitted successfully!";
} else {
    echo "Form submission error.";
}

//for ratings
// Check if form is submitted
if (isset($_POST['submit_rating'])) {
    // Check if rating is selected
    if (isset($_POST['rating'])) {
        // Get the submitted rating
        $rating = $_POST['rating'];

        // For demonstration
        $ratings = []; 
        
        // Add the new rating to the existing ratings array
        $ratings[] = $rating;

        // Calculate the average rating
        $averageRating = array_sum($ratings) / count($ratings);

        // For checking echo the average rating
        echo "Average Rating: " . number_format($averageRating, 2);
        

    } else {
        echo "Please select a rating!";
    }
}

?>

<?php

//to process contact.html
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
    $file = 'tourzaContactUs.txt';
    file_put_contents($file, $reviewData, FILE_APPEND | LOCK_EX);

   //to show a popup and redirect back to the previous page
   echo "<script>alert('Review submitted successfully!'); window.location.href = document.referrer;</script>";
} else {
    echo "Form submission error.";
}
?>
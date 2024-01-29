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
    $file = 'ContactUs.txt';
    file_put_contents($file, $reviewData, FILE_APPEND | LOCK_EX);

   //to show a popup and redirect back to the previous page
   echo "<script>alert('Review submitted successfully!'); window.location.href = document.referrer;</script>";
} else {
    echo "Form submission error.";
}
?>
echo "<div class='col'>
                <div class='card shadow-sm'>
                  <div class='card-header'>
                    <img src='$image' class='bd-placeholder-img card-img-top' width='100%' height='225' alt='place picture'>
                  </div>
                  <div class='card-body' style='max-height: 250px; overflow-y: auto;'>
                    <p class='card-text'>$description</p>
                    <p><a href='$link' class='link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover'>Visit this place</a></p>
                  </div>
                  <small class='text-body-secondary'>$provinceID</small>
                </div>
              </div>";
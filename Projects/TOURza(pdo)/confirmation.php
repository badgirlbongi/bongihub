<?php
session_start();

// Retrieve data from session variables
$placeID = $_SESSION['placeID'];
$placeName = $_SESSION['placeName'];
$placeDescription = $_SESSION['placeDescription'];
$placeLink = $_SESSION['placeLink'];
$provinceID = $_SESSION['provinceID'];

// Clear session variables
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>

<h2>Data Submitted Successfully</h2>
<p>Place ID: <?php echo $placeID; ?></p>
<p>Place Name: <?php echo $placeName; ?></p>
<p>Place Description: <?php echo $placeDescription; ?></p>
<p>Place Link: <?php echo $placeLink; ?></p>
<p>Province ID: <?php echo $provinceID; ?></p>

<?php
// Display the image if available
if (isset($imageContent) && !empty($imageContent)) {
    $imageSrc = "data:image/jpeg;base64," . base64_encode($imageContent);
    echo "<img src='$imageSrc' alt='Place Image'>";
} else {
    echo "No image available";
}
?>

</body>
</html>

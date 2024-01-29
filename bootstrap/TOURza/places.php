<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourza";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$selectedProvince = $_GET['province'];
//$selectedProvince = isset($_GET['province']);
// ? $_GET['province'] : null;

function generateContent($places, $conn, $selectedProvince) {
   
    $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID ='$selectedProvince'";
    
    // Prepare and bind the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $places);
    
    // Execute the statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        // Assign values to variables
        $image = $row['placePicture'];
        $description = $row['placeDescription'];
        $link = $row['placeLink'];
        $provinceID = $row['provinceID'];

        // Display place information
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
    }

    $stmt->close();
}

// Close the connection
$conn->close();

?>





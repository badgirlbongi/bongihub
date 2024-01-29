<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$province = 'EC';

function generateContent($province, $conn) {
    
    switch ($province) {
        case 'EC':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'EC'";
          break; 
        case 'FS':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'FS'";
          break;
        case 'G':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'G'";
          break;
        case 'KZN':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'KZN'";
          break;
        case 'L':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'L'";
          break;
        case 'MP':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'MP'";
          break;
        case 'NC':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'NC'";
          break;
        case 'NW':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'NW'";
          break;
        case 'WC':
          $sql = "SELECT placePicture, placeDescription, placeLink, provinceID FROM place WHERE provinceID = 'WC'";
          break;
        default:
          // Handle other cases or provide a default behavior
          break;
    }
    
    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Fetch the data
        $row = mysqli_fetch_assoc($result);

        // Assign values to variables
        $image = $row['placePicture'];
        $description = $row['placeDescription'];
        $link = $row['placeLink'];
        $provinceID = $row['provinceID'];

        // to test if its working
       //echo "Image: $image, Description: $description, Link: $link, Province: $provinceID";
        echo "<div class='col'>
        <div class='card shadow-sm'>
          <div class='card-header'>
            <img src='$image' class='bd-placeholder-img card-img-top' width='100%' height='225' alt='place picture'>
          </div>
          <div class='card-body' style='max-height: 250px; overflow-y: auto;'>
            <p class='card-text'>
              $description
            <p>
            <a href='$link' class='link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover'>Visit this place</a></p>
          </div>
                      
          <small class='text-body-secondary'>$provinceID</small>
        </div>";
    } 
    else {
        echo "Query failed";
    }
}

$conn = mysqli_connect("localhost", "root", "", "tourza");

generateContent($province, $conn);

mysqli_close($conn);

?>


                
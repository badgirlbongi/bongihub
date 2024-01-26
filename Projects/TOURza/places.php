<?
$province = 'EC';

function generateContent($province) {
    
    switch ($province) {
        case 'EC':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'EC'";
          break; 
        case 'FS':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'FS'";
          break;
        case 'G':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'G'";
          break;
        case 'KZN':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'KZN'";
          break;
        case 'L':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'L'";
          break;
        case 'MP':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'MP'";
          break;
        case 'NC':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'NC'";
          break;
        case 'NW':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'NW'";
          break;
        case 'WC':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'WC'";
          break;
      default:
        // Handle other cases or provide a default behavior
        break;
    }
    
     // Execute the SQL query
    $result = mysqli_query($your_db_connection, $sql);

    if ($result) {
      // Fetch the data
      $row = mysqli_fetch_assoc($result);

      // Assign values to variables
      $image = $row['placePicture'];
      $description = $row['placeDescription'];
      $link = $row['placeLink'];

      // Use the variables as needed
    } else {
      // Handle the case where the query fails
    }
    
  }
?>




<!--
php
include 'index.html';

$page = $_GET['page'] ?? ''; // Get the 'page' parameter from the URL


-->

                
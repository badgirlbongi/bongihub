<?
$page = 'EC';

function generateContent($page) {
    
    switch ($page) {
        case 'EC':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'EC'";
          $image =;
          $description =;
          $link =;
             break; 
      case 'FS':
        $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'FS'";
          $image =;
          $description =;
          $link =;
       break;
       case 'G':
        $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'G'";
        $image =;
        $description =;
        $link =;
        break;
        case 'KZN':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'KZN'";
          $image =;
          $description =;
          $link =;
          break;
        case 'L':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'L'";
          $image =;
          $description =;
          $link =;
          break;
        case 'MP':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'MP'";
          $image =;
          $description =;
          $link =;
          break;
        case 'NC':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'NC'";
          $image =;
          $description =;
          $link =;
          break;
        case 'NW':
          $sql = "SELECT placePicture, placeDescription, placeLink FROM place WHERE provinceID = 'NW'";
          $image =;
          $description =;
          $link =;
          break;
        case 'WC':
          echo 'this is working';
          break;
      default:
        // Handle other cases or provide a default behavior
        break;
    }
    
    
  }
?>

<!--
php
include 'index.html';

$page = $_GET['page'] ?? ''; // Get the 'page' parameter from the URL


-->

                
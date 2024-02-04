<?php

$dsn = 'mysql:host=localhost;dbname=tourza';
$username = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$selectedProvince = $_GET['province'];

function generateContent($pdo, $selectedProvince) {

    $sql = "SELECT p.placeDescription, p.placeLink, p.provinceID, p.placeID, i.image_dir 
            FROM place p
            INNER JOIN images i ON p.placeID = i.imageName
            WHERE p.provinceID = :provinceID";

    // Prepare and execute the statement
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':provinceID', $selectedProvince, PDO::PARAM_STR);
    $stmt->execute();
    
    // Get result
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        // Assign values to variables
        $image = $row['image_dir'];
        $description = $row['placeDescription'];
        $link = $row['placeLink'];
        $provinceID = $row['provinceID'];
        $placeID = $row['placeID'];

        // Display place information
        echo "
      <div class='col'>
        <div class='card shadow-sm'>
          <div class='card-header'>
            <img src='$image' class='bd-placeholder-img card-img-top' width='100%' height='225' alt='place image'>
          </div>
          <div class='card-body' style='max-height: 250px; overflow-y: auto;'>
            <p class='card-text'>$description</p>
            <p><a href='$link' class='link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover'>Visit this place</a></p>
          </div>
          <!-- Rating Form -->
          <div class='card-footer'>
            <form id='ratingForm' action='reviews.php' method='post'>
              <p>Rate this place:</p>
              <label><input type='radio' name='rateValue' value='1'> ★</label>
              <label><input type='radio' name='rateValue' value='2'> ★★</label>
              <label><input type='radio' name='rateValue' value='3'> ★★★</label>
              <label><input type='radio' name='rateValue' value='4'> ★★★★</label>
              <label><input type='radio' name='rateValue' value='5'> ★★★★★</label>
              <br><br>
              <input type='hidden' id='comment' name='comment' value=''>
              <input type='hidden' name='placeID' value='<?php echo $placeID; ?>'>
              <div class='d-flex justify-content-between align-items-center'>
                <div class='btn-group'>
                  <button type='button' onclick='showPopup()' class='btn btn-sm btn-outline-secondary'>Rate</button>
                  <a href='reviews.phtml' class='btn btn-sm btn-outline-secondary' id='reviews'>Reviews</a>
                </div>
                <small class='text-body-secondary'>$provinceID - $placeID</small>
              </div>
            </form>
          </div>
        </div>
      </div>";
    }
}

// Call the function
generateContent($pdo, $selectedProvince);

// Close the connection
$pdo = null;

?>

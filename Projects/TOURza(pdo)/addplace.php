<!doctype html>
<html lang="en" data-bs-theme="auto">

  <head>
    <script src="assets\js\color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Add places</title>

    <!--Links-->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="assets\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

  </head>
  
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

<header data-bs-theme="dark">
  <div class="collapse text-bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4>Connect with Us</h4>
          <p class="text-body-secondary">Follow us on our socials and let's be friends!!</p>
          <div class="container mt-5">
            <a href="https://www.facebook.com/TOURza">
              <i class='bx bxl-facebook text-warning' style="font-size: 3em;"></i></a>
            <a href="https://twitter.com/TOURza">
              <i class='bx bxl-twitter text-warning' style="font-size: 3em;"></i></a>
            <a href="https://www.instagram.com/TOURza">
              <i class='bx bxl-instagram text-warning' style="font-size: 3em;"></i></a>
            <a href="#"><i class='bx bxl-linkedin text-warning' style="font-size: 3em;"></i></a>
            <a href="index.html" class="btn btn-warning my-2">Home</a>
            <a href="reviews.html" class="btn btn-warning my-2">Reviews</a>
            <a href="contact.html" class="btn btn-warning my-2">Contact Us</a>
          </div> 
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
         <img src="img/destination.png" alt="logo" width="50"/>
         <strong>TOURza-</strong>
         <strong class="text-warning">Add Place</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<?php
$dsn = 'mysql:host=localhost;dbname=tourza';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$table = 'place';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $placeID = $_POST["placeID"];
    $placeName = $_POST["placeName"];
    $placeDescription = $_POST["placeDescription"];
    $placeLink = $_POST["placeLink"];
    $provinceID = $_POST["provinceID"];

    // SQL query to insert data into the 'place' table
    $sql = "INSERT INTO `place` 
            (`placeID`, `placeName`, `placeDescription`, `placeLink`, `provinceID`) 
            VALUES 
            (:placeID, :placeName, :placeDescription, :placeLink, :provinceID)";

    // Use prepared statement to bind parameters
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":placeID", $placeID, PDO::PARAM_STR);
    $stmt->bindParam(":placeName", $placeName, PDO::PARAM_STR);
    $stmt->bindParam(":placeDescription", $placeDescription, PDO::PARAM_STR);
    $stmt->bindParam(":placeLink", $placeLink, PDO::PARAM_STR);
    $stmt->bindParam(":provinceID", $provinceID, PDO::PARAM_STR);

    // Execute the query
    if ($stmt->execute()) {
        // Store inserted data in session variables
        session_start();
        $_SESSION['placeID'] = $placeID;
        $_SESSION['placeName'] = $placeName;
        $_SESSION['placeDescription'] = $placeDescription;
        $_SESSION['placeLink'] = $placeLink;
        $_SESSION['provinceID'] = $provinceID;

        // Redirect to confirmation page
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error inserting data: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
}
$pdo = null;
?>

<main> 
<div class="container mt-5">
    <h3 class="text-warning">Share details about the place you want to add</h3>
  
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="placeID">Place ID:</label>
            <input type="text" class="form-control" name="placeID" placeholder="Enter the place ID " required>
        </div>
        <div class="form-group">
            <label for="placeName">Place Name:</label>
            <input type="text" class="form-control" name="placeName" placeholder="Enter the place full name" required>
        </div>
        <div class="form-group">
            <label for="placePicture">Place Picture: (save image name as placeID)</label>
            <input type="file" class="form-control" name="userfile[]" value="" required>
        </div>
        <div class="form-group">
          <label for="placeDescription">Place Description:</label>
          <textarea class="form-control" name="placeDescription" rows="6" placeholder="Enter the place full name" required></textarea>
      </div>
        <div class="form-group">
            <label for="placeLink">Place Link:</label>
            <input type="text" class="form-control" name="placeLink" placeholder="Paste the place website link" required>
        </div>
        <div class="form-group">
            <label for="provinceID">Province ID:</label>
            <input type="text" class="form-control" name="provinceID" placeholder="Enter the province abbreviation" required>
        </div>
      <br>
      <button type="submit" class="btn btn-warning">Add place</button>
    </form>
</main>

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

$table = 'images';

$phpFileUploadErrors = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    5 => 'Missing a temporary folder',
    6 => 'Failed to write file to disk',
    7 => 'A PHP extension stopped the file upload',
);

if (isset($_FILES['userfile'])) {
    $file_array = reArrayFiles($_FILES['userfile']);
    for ($i = 0; $i < count($file_array); $i++) {
        if ($file_array[$i]['error']) {
            echo '<div class="alert alert-danger">' . $file_array[$i]['name'] . ' - ' . $phpFileUploadErrors[$file_array[$i]['error']] . '</div>';
        } else {
            $extensions = array('jpg', 'png', 'jpeg', 'webp', 'gif', 'avif', 'JPG');
            $file_ext = explode('.', $file_array[$i]['name']);
            $name = $file_ext[0];
            $file_ext = end($file_ext);

            if (!in_array($file_ext, $extensions)) {
                echo '<div class="alert alert-danger">' . $file_array[$i]['name'] . ' - Invalid file extension!</div>';
            } else {
                $img_dir = 'web/' . $file_array[$i]['name'];
                move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);

                $sql = "INSERT IGNORE INTO $table (imageName, image_dir) VALUES(:name, :img_dir)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':img_dir', $img_dir);

                if ($stmt->execute()) {
                    echo '<div class="alert alert-success">' . $file_array[$i]['name'] . ' - ' . $phpFileUploadErrors[$file_array[$i]['error']] . '</div>';
                } else {
                    echo '<div class="alert alert-danger">Error inserting data into database</div>';
                }
            }
        }
    }
}

function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i = 0; $i < $file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

function pre_r($array) {
    echo '<pre';
    print_r($array);
    echo '</pre';
}
?>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">TOURza is a &copy; Bootstrap, css, js, mysql and php embedded in html web application</p>
    <p class="mb-0">For accomodation around the places you want to explore <a href="https://www.airbnb.co.za/">visit airbnb.</a></p>
  </div>
</footer>

<script src="assets\dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>

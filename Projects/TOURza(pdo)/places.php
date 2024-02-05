<!doctype html>
<html lang="en" data-bs-theme="auto">

  <head>
    <script src="assets\js\color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Places</title>

    <!--Links-->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="assets\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <script>
      function showPopup() {
        var comment = prompt("Please enter your comment:");
        if (comment != null) {
          // If the user enters a comment, proceed to submit the rating and comment via form
          document.getElementById("comment").value = comment;
          document.getElementById("ratingForm").submit();
        }
      }
    </script>

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
      <symbol xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
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
         <strong class="text-warning">Destinations</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>
  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

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

      <i class="bi bi-plus-circle"></i>
      </div>
    </div>
  </div>

</main>

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

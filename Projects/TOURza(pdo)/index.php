
<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php include 'db.php'; ?>
  <style>
    .card {
      height: 350px;
    }
    .carousel-inner img {
      height: 250px;
      object-fit: cover;
    }
    .carousel {
      height: 250px; 
    }
  </style>

<?php
function countPlacesByProvinceID($pdo, $provinceID) {
    // Prepare SQL query to select and count places with the given provinceID
    $sql = "SELECT COUNT(*) AS placeCount FROM place WHERE provinceID = :provinceID";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':provinceID', $provinceID, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetch();

    return $result['placeCount'];
}
?>

  <head>
    <script src="assets\js\color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>TOURza</title>
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
          </div> 
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
         <img src="img/airplane.png" alt="logo" width="50"/>
        <strong>TOURza</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-center text-warning">Tour South Africa Today!</h1>
        <p class="lead text-body-secondary">Touring South Africa is an immersion in natural wonders, 
          diverse cultures, and vibrant history. From the stunning landscapes of Table Mountain to the wild
          safaris of Kruger National Park, the country captivates with its sheer beauty. Exploring the bustling
          streets of Cape Town or Johannesburg unveils a blend of traditions, art, and flavors, while the poignant
          history of apartheid echoes through museums and landmarks like Robben Island. Whether delving into the 
          breathtaking Garden Route, discovering the rich heritage of Zulu or Xhosa communities, or savoring the 
          exquisite cuisine and wines, South Africa offers an unforgettable journey through its tapestry of experiences.
        </p>
        <p>
          <a href="about.html" class="btn btn-warning my-2">About Us</a>
          <a href="displayReviews.php" class="btn btn-warning my-2">Reviews</a>
          <a href="contactUs.html" class="btn btn-warning my-2">Contact Us</a>
        </p>
      </div>
    </div>
    </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                  <!--carousel-->
                  <div class="card-header">
                  <div id="carouselWC" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselWC" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselWC" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselWC" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselWC" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#carouselWC" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#carouselWC" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      <button type="button" data-bs-target="#carouselWC" data-bs-slide-to="6" aria-label="Slide 7"></button>
                      <button type="button" data-bs-target="#carouselWC" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/westerncape.webp" class="d-block w-100" alt="westerncape">
                      </div>
                      <div class="carousel-item">
                        <img src="img/cape-town-aerial-view-greenpoint-stadium.jpg" class="d-block w-100" alt="westerncape">
                      </div>
                      <div class="carousel-item">
                        <img src="img/capetown.jpg" class="d-block w-100" alt="westerncape">
                      </div>
                      <div class="carousel-item">
                        <img src="img/franschhoek.jpg" class="d-block w-100" alt="westerncape">
                      </div>
                      <div class="carousel-item">
                        <img src="img/hermanus.jpg" class="d-block w-100" alt="westerncape">
                      </div>
                      <div class="carousel-item">
                        <img src="img/knysna.jpg" class="d-block w-100" alt="westerncape">
                      </div>
                      <div class="carousel-item">
                        <img src="img/stellenbosch.webp" class="d-block w-100" alt="westerncape">
                      </div>
                      <div class="carousel-item">
                        <img src="img/1.jpg" class="d-block w-100" alt="westerncape">
                      </div>
                  </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselWC" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselWC" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
             </div>
             </div>
             <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                      <p class="card-text">
                        The Western Cape province in South Africa enchants with its diverse beauty, from the iconic
                        Table Mountain overseeing Cape Town to the sweeping vineyards of the Cape Winelands, 
                        offering a blend of cosmopolitan charm, breathtaking landscapes, and world-class wine experiences.</p>
                        </div>
                        <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                              <a href="places.php?province=WC" class="btn btn-sm btn-outline-secondary" id="WC">View</a>
                            <small class="text-body-secondary">
                            <?php $provinceID = 'WC';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <!--Carousel-->
                <div class="card-header">
                <div id="carouselEC" class="carousel slide">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselEC" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselEC" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselEC" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselEC" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselEC" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselEC" data-bs-slide-to="5" aria-label="Slide 6"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/stampriver.jpg" class="d-block w-100" alt="easterncape">
                    </div>
                    <div class="carousel-item">
                      <img src="img/easterncape.jpg" class="d-block w-100" alt="easterncape">
                    </div>
                    <div class="carousel-item">
                      <img src="img/east london.jpg" class="d-block w-100" alt="easterncape">
                    </div>
                    <div class="carousel-item">
                      <img src="img/jeffreysbay.jpg" class="d-block w-100" alt="easterncape">
                    </div>
                    <div class="carousel-item">
                      <img src="img/portelizabeth.jpg" class="d-block w-100" alt="easterncape">
                    </div>
                    <div class="carousel-item">
                      <img src="img/2.jpg" class="d-block w-100" alt="easterncape">
                    </div>
                </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselEC" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselEC" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
           </div>
           </div>
           <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                    <p class="card-text">
                      The Eastern Cape, with its rugged Wild Coast, rich history including Nelson Mandela's birthplace, and diverse wildlife reserves, 
                      embodies an untamed allure and cultural significance in South Africa's landscape.</p>
                  </div>
                  <div class="card-footer">
                      <div class="d-flex justify-content-between align-items-center">
                    <a href="places.php?province=EC" class="btn btn-sm btn-outline-secondary" id="EC">View</a>
                          <small class="text-body-secondary">
                          <?php $provinceID = 'EC';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <!--carousel-->
              <div class="card-header">
              <div id="carouselNC" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselNC" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselNC" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselNC" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselNC" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselNC" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/kimberley.png" class="d-block w-100" alt="northerncape">
                  </div>
                  <div class="carousel-item">
                    <img src="img/kuruman.jpg" class="d-block w-100" alt="northerncape">
                  </div>
                  <div class="carousel-item">
                    <img src="img/Upington.jpg" class="d-block w-100" alt="northerncape">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sutherland.jpg" class="d-block w-100" alt="northerncape">
                  </div>
                  <div class="carousel-item">
                    <img src="img/ncc.jpg" class="d-block w-100" alt="northerncape">
                  </div>
              </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselNC" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselNC" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
         </div>
         </div>
         <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                  <p class="card-text">
                    The Northern Cape, renowned for its vast semi-desert landscapes, ancient rock formations like the majestic Augrabies Falls,
                    and stargazing opportunities in the remote wilderness, offers a serene and unique exploration of South Africa's natural wonders.</p>
                 </div>
                 <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="places.php?province=NC" class="btn btn-sm btn-outline-secondary" id="NC">View</a>
                        <small class="text-body-secondary"> 
                          <?php $provinceID = 'NC';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!--carousel-->
            <div class="card-header">
            <div id="carouselKZN" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselKZN" data-bs-slide-to="9" aria-label="Slide 10"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/UshakaMarine.jpeg" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/kwazulunatal.jpg" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/aquarium.jpg" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/drakensberge.jpg" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/evamont.webp" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/mandela.png" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/shaka.jpg" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/ship.webp" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/zulucultural.jpg" class="d-block w-100" alt="kwazulunatal">
                </div>
                <div class="carousel-item">
                  <img src="img/4.jpg" class="d-block w-100" alt="kwazulunatal">
                </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselKZN" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselKZN" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
          </div>
          <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                    <p class="card-text">
                      KwaZulu-Natal, nestled along the eastern coast of South Africa, boasts a rich tapestry of landscapes,
                      from the majestic Drakensberg Mountains to the golden shores of its coastline, embodying a fusion of Zulu traditions, 
                      historical battlefields, and vibrant urban life in cities like Durban.</p>
                    </div>
                    <div class="card-footer">
                      <div class="d-flex justify-content-between align-items-center">
                      <a href="places.php?province=KZN" class="btn btn-sm btn-outline-secondary" id="KZN">View</a>
                        <small class="text-body-secondary">
                        <?php $provinceID = 'KZN';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!--carousel-->
            <div class="card-header">
            <div id="carouselMP" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselMP" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselMP" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselMP" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselMP" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselMP" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselMP" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselMP" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselMP" data-bs-slide-to="7" aria-label="Slide 8"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/window.png" class="d-block w-100" alt="mpumalanga">
                </div>
                <div class="carousel-item">
                  <img src="img/mpumalanga.jpg" class="d-block w-100" alt="mpumalanga">
                </div>
                 <div class="carousel-item">
                  <img src="img/bridge.jpg" class="d-block w-100" alt="mpumalanga">
                </div>
                 <div class="carousel-item">
                  <img src="img/graskopgorge.jpg" class="d-block w-100" alt="mpumalanga">
                </div>
                 <div class="carousel-item">
                  <img src="img/hotairballoon.jpg" class="d-block w-100" alt="mpumalanga">
                </div>
                 <div class="carousel-item">
                  <img src="img/rocks.jpg" class="d-block w-100" alt="mpumalanga">
                </div>
                 <div class="carousel-item">
                  <img src="img/waterfall.jpg" class="d-block w-100" alt="mpumalanga">
                </div>
                 <div class="carousel-item">
                  <img src="img/5.png" class="d-block w-100" alt="mpumalanga">
                </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselMP" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselMP" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
       </div>
       </div>
       <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                    <p class="card-text">
                      Mpumalanga, known for its lush landscapes, dramatic escarpment along the Blyde River Canyon, and wildlife-rich Kruger National Park,
                      presents a breathtaking immersion into South Africa's scenic beauty and wildlife wonders.</p>
                    </div>
                    <div class="card-footer">
                      <div class="d-flex justify-content-between align-items-center">
                      <a href="places.php?province=MP" class="btn btn-sm btn-outline-secondary" id="MP">View</a>
                        <small class="text-body-secondary">
                        <?php $provinceID = 'MP';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!--carousel-->
            <div class="card-header">
            <div id="carouselFS" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselFS" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselFS" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselFS" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselFS" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselFS" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselFS" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselFS" data-bs-slide-to="6" aria-label="Slide 7"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/clarens.jpg" class="d-block w-100 " alt="freestate">
                </div>
                <div class="carousel-item">
                  <img src="img/freestate.jpg" class="d-block w-100" alt="freestate">
                </div>
                <div class="carousel-item">
                  <img src="img/bethlehem.jpg" class="d-block w-100" alt="freestate">
                </div>
                <div class="carousel-item">
                  <img src="img/bloemfontein.jpg" class="d-block w-100" alt="freestate">
                </div>
                <div class="carousel-item">
                  <img src="img/cityhall.jpg" class="d-block w-100" alt="freestate">
                </div>
                <div class="carousel-item">
                  <img src="img/parys.jpg" class="d-block w-100" alt="freestate">
                </div>
                <div class="carousel-item">
                  <img src="img/6.jpg" class="d-block w-100" alt="freestate">
                </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselFS" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselFS" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
       </div>
       </div>
       <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                    <p class="card-text">
                      The Free State province in South Africa captivates with its vast golden plains, historic charm in towns like Bloemfontein, 
                      and agricultural richness, encapsulating a serene and storied essence of the country's heartland.</p>
                   </div>
                   <div class="card-footer">
                      <div class="d-flex justify-content-between align-items-center">
                    <a href="places.php?province=FS" class="btn btn-sm btn-outline-secondary" id="FS">View</a>
                        <small class="text-body-secondary">
                        <?php $provinceID = 'FS';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!--carousel-->
            <div class="card-header">
            <div id="carouselG" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#carouselG" data-bs-slide-to="10" aria-label="Slide 11"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/GoldReefCity.jpg" class="d-block w-100 " alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/gauteng.jpg" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/voortreker.jpg" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/hectorpieterson.jpg" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/jhb.webp" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/kgugerssdome.jpg" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/light.jpg" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/orange.jpg" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/sowetotowers.jpg" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/pta.png" class="d-block w-100" alt="gauteng">
                </div>
                <div class="carousel-item">
                  <img src="img/7.jpeg" class="d-block w-100" alt="gauteng">
                </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselG" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselG" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
       </div> 
       </div>
       <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                    <p class="card-text">
                      Gauteng, the vibrant economic hub of South Africa, pulsates with the energy of Johannesburg and Pretoria, offering a dynamic blend of urban sophistication, 
                      cultural diversity, and historical significance.</p>
                  </div>
                  <div class="card-footer">
                      <div class="d-flex justify-content-between align-items-center">
                    <a href="places.php?province=G" class="btn btn-sm btn-outline-secondary" id="GP">View</a>
                        <small class="text-body-secondary">
                        <?php $provinceID = 'G';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!--carousel-->
            <div class="card-header">
            <div id="carouselNW" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselNW" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselNW" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselNW" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselNW" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselNW" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselNW" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselNW" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselNW" data-bs-slide-to="7" aria-label="Slide 8"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/waternw.jpg" class="d-block w-100 " alt="northwest">
                </div>
                <div class="carousel-item">
                  <img src="img/northwest.webp" class="d-block w-100" alt="northwest">
                </div>
                <div class="carousel-item">
                  <img src="img/bridgenw.jpg" class="d-block w-100" alt="northwest">
                </div>
                <div class="carousel-item">
                  <img src="img/culture.jpg" class="d-block w-100" alt="northwest">
                </div>
                <div class="carousel-item">
                  <img src="img/elephant.jpg" class="d-block w-100" alt="northwest">
                </div>
                <div class="carousel-item">
                  <img src="img/falls.jpg" class="d-block w-100" alt="northwest">
                </div>
                <div class="carousel-item">
                  <img src="img/ssuncity.jpg" class="d-block w-100" alt="northwest">
                </div>
                <div class="carousel-item">
                  <img src="img/8.jpg" class="d-block w-100" alt="northwest">
                </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselNW" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselNW" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
       </div>
       </div>
       <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                    <p class="card-text">
                    North West province, adorned with the scenic beauty of the Pilanesberg National Park, Sun City's entertainment allure, and rural charm,
                    invites exploration into a realm of natural splendor and leisurely pursuits in South Africa.</p>
                    </div>
                    <div class="card-footer"> 
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="places.php?province=NW" class="btn btn-sm btn-outline-secondary" id="NW">View</a>
                        <small class="text-body-secondary">
                        <?php $provinceID = 'NW';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <!--carousel-->
            <div class="card-header">
            <div id="carouselL" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselL" data-bs-slide-to="8" aria-label="Slide 9"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/mapungubwe.jpg" class="d-block w-100 " alt="limpopo">
                </div>
                <div class="carousel-item">
                  <img src="img/limpopo.jpg" class="d-block w-100" alt="limpopo">
                </div>
                <div class="carousel-item">
                  <img src="img/casino.jpg" class="d-block w-100" alt="limpopo">
                </div>
                <div class="carousel-item">
                  <img src="img/waterfalls.jpg" class="d-block w-100" alt="limpopo">
                </div>
                <div class="carousel-item">
                  <img src="img/tea.jpg" class="d-block w-100" alt="limpopo">
                </div>
                <div class="carousel-item">
                  <img src="img/warmbaths.jpg" class="d-block w-100" alt="limpopo">
                </div>
                <div class="carousel-item">
                  <img src="img/water.jpg" class="d-block w-100" alt="limpopo">
                </div>
                <div class="carousel-item">
                  <img src="img/Waterberg.jpg" class="d-block w-100" alt="limpopo">
                </div>
                <div class="carousel-item">
                  <img src="img/9.jpg" class="d-block w-100" alt="limpopo">
                </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselL" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselL" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
       </div>
       </div>
       <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                    <p class="card-text">
                    Limpopo province, steeped in ancient baobab trees, the diverse wildlife of Kruger National Park's northern reaches, and cultural richness,
                    beckons with its untamed landscapes and a deep connection to South Africa's natural and historical heritage.</p>
                    </div>
                    <div class="card-footer">  
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="places.php?province=L" class="btn btn-sm btn-outline-secondary" id="L">View</a>
                        <small class="text-body-secondary">
                        <?php $provinceID = 'L';
                              $count = countPlacesByProvinceID($pdo,$provinceID);
                              echo $count; ?> places</small>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="text-body-secondary py-5">
  <div class="container">

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
      <p class="lead text-body-secondary">Can't find the place you're looking for?, Just search for it.</p>
      </div>
      <div class="container-fluid">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </section>

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
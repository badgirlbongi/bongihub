<?php
include 'placeContent.phtml';

$page = $_GET['page'] ?? ''; 

generateContent($page);

?>

<?php
function generateContent($page) {
    
    switch ($page) {
        case 'WC':
            echo "<div class= 'album py-5 bg-body-tertiary'>
            <div class='container'>
              <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>
        
                <div class='col'>
                  <div class='card shadow-sm'>
                      <img src='mg/WC/1.jpeg' class='bd-placeholder-img card-img-top' width='100%' height='225' alt='Your Image Description'>
                      <div class='card-body' style='max-height: 250px; overflow-y: auto;''>
                            <p class='card-text'>
                              Kirstenbosch National Botanical Garden, nestled at the foot of Table Mountain in Cape Town, Western Cape, is a stunning haven for biodiversity and natural beauty. Renowned for its diverse flora, it showcases South Africa's indigenous plant species across various themed gardens and landscapes. The garden offers visitors a chance to explore tranquil pathways, marvel at unique plant collections, and appreciate the breathtaking scenery. It's not just a botanical paradise but also a hub for conservation, research, and education, making it a must-visit destination for nature enthusiasts and botany lovers.
                              <p><a href='https://www.capetown.travel/relax-on-the-lawns-of-cape-towns-prettiest-garden/' class=link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover'>Visit this place</a></p>
                            </div>
                              <!-- Rating Form -->
                              <div class='card-footer'>
                              <form id='ratingForm' action='process.php' method='post'>
                                <p>Rate this place:</p>
                                <label><input type='radio' name='rating' value='1'> ★</label>
                                <label><input type='radio' name='rating' value='2'> ★★</label>
                                <label><input type='radio' name='rating' value='3'> ★★★</label>
                                <label><input type='radio' name='rating' value='4'> ★★★★</label>
                                <label><input type='radio' name='rating' value='5'> ★★★★★</label>
                                <br><br>
                                <input type='hidden' id='comment' name='comment' value=''>
                                <div class='d-flex justify-content-between align-items-center'>
                                  <div class='btn-group'>
                                    <button type='button' onclick='showPopup()' class='btn btn-sm btn-outline-secondary'>Rate</button>
                                    <button type='button' class='btn btn-sm btn-outline-secondary'>Reviews</button>
                                  </div>
                                  <small class='text-body-secondary'>Western Cape</small>
                                </div>
                              </form>
                          </div>
                    </div>
                </div>";
             break; 
      case 'EC':
          echo "This is the Eastern Cape link.";
       break;
      default:
        // Handle other cases or provide a default behavior
        break;
    }
    
  }
?>

                
<?php
require_once 'db.php'; 

class Search {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function searchWebsite($keyword) {
        $stmt = $this->db->prepare("
            SELECT * FROM (
                SELECT 'images' AS table_name, imgID AS id, imageName AS name, image_dir AS content FROM images
                UNION ALL
                SELECT 'place' AS table_name, placeID AS id, placeName AS name, CONCAT(placeDescription, ' ', placeLink) AS content FROM place
            ) AS all_tables
            WHERE content LIKE :keyword");
        $stmt->execute(array(':keyword' => '%' . $keyword . '%'));
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $results;
    }
}

// Database connection
$db = new Database();

// Check if search query is provided
if (isset($_GET['q'])) {
    // Search for the keyword
    $search = new Search($db);
    $keyword = $_GET['q'];
    $results = $search->searchWebsite($keyword);

    // Display search results
    foreach ($results as $result) {
        echo "<h2>{$result['name']}</h2>";
        echo "<p>{$result['content']}</p>";
    }
}

$db->closeConnection(); 
?>

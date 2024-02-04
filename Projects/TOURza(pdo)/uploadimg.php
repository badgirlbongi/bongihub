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

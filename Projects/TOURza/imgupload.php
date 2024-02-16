<?php
include 'db.php'; 

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

function addImages($db, $filesArray, $tableName) {
    global $phpFileUploadErrors;

    $uploadedImages = array();

    foreach ($filesArray as $file) {
        if ($file['error']) {
            $uploadedImages[] = '<div class="alert alert-danger">' . $file['name'] . ' - ' . $phpFileUploadErrors[$file['error']] . '</div>';
        } else {
            $extensions = array('jpg', 'png', 'jpeg', 'webp', 'gif', 'avif', 'JPG');
            $file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $name = pathinfo($file['name'], PATHINFO_FILENAME);

            if (!in_array($file_ext, $extensions)) {
                $uploadedImages[] = '<div class="alert alert-danger">' . $file['name'] . ' - Invalid file extension!</div>';
            } else {
                $img_dir = 'web/' . $file['name'];
                move_uploaded_file($file['tmp_name'], $img_dir);

                $sql = "INSERT IGNORE INTO $tableName (imageName, image_dir) VALUES(:name, :img_dir)";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':img_dir', $img_dir);

                if ($stmt->execute()) {
                    $uploadedImages[] = '<div class="alert alert-success">' . $file['name'] . ' - ' . $phpFileUploadErrors[$file['error']] . '</div>';
                } else {
                    $uploadedImages[] = '<div class="alert alert-danger">Error inserting data into database</div>';
                }
            }
        }
    }

    return $uploadedImages;
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
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

if (isset($_FILES['userfile'])) {
    $file_array = reArrayFiles($_FILES['userfile']);

    $db = new Database();
    $resultMessages = addImages($db, $file_array, $table);
    foreach ($resultMessages as $message) {
        echo $message;
    }
}
?>

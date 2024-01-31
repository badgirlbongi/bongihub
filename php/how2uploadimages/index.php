<html>
    <head>
        <title>image upload</title>
    </head>
    <body>
        <form action= "" method="POST"enctype="multipart/form-data">
            <input type="file" name="userfile[]" value="" multiple="">
            <input type="submit" name="submit" value="upload">
        </form>
    </body>
</html>

<?php

$mysqli = new mysqli('localhost','root','','insertimages') or die ($mysqli->connect_error);
$table = 'places';

$phpFileUploadErrors = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the uploaad_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    5 => 'Missing a temporary folder',
    6 => 'Failed to write file to disk',
    7 => 'A PHP extension stopped the file upload',
);

//$_$FILES global variable
if(isset($_FILES['userfile'])){
    $file_array = reArrayFiles($_FILES['userfile']);
    //pre_r($file_array);
    for ($i=0;$i<count($file_array);$i++){
        if ($file_array[$i]['error'])
        {
            ?> <div class="alert alert-danger">
            <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];
            ?> </div> <?php
        }
        else {
            $extensions = array('jpg','png','jpeg','web','gif');

            $file_ext = explode('.',$file_array[$i]['name']);
            $file_ext = end($file_ext);

            if(!in_array($file_ext, $extensions))
            {
                ?> <div class="alert alert-danger">
                <?php echo"{$file_array[$i]['name']} - Invalid file extension!";
                ?> </div> <?php
            }
        }
    }
}
function reArrayFiles(&$file_post){
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);
}
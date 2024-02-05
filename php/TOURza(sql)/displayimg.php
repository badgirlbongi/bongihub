<!DOCTYPE html>
<html>
    <head>
        <title>image upload</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link rel="stylesheet" href="assets\dist\css\bootstrap.min.css">
        <script src="assets\dist\js\bootstrap.bundle.min.js"></script>
    </head>
    <body>

    <?php
    $mysqli = new mysqli('localhost','root','','tourza') or die ($mysqli->connect_error);
    $table = 'images';

    $result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);

    while($data = $result->fetch_assoc()){
        echo "<h2>{$data['imageName']}</h2>";
        echo "<img src='{$data['image_dir']}' width='40%' height='40%'>";
    }

    ?>

    </body>
</html>
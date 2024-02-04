<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link rel="stylesheet" href="assets\dist\css\bootstrap.min.css">
        <script src="assets\dist\js\bootstrap.bundle.min.js"></script>
    </head>
    <body>

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

    $table = 'images';

    $stmt = $pdo->query("SELECT * FROM $table");

    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<h2>{$data['imageName']}</h2>";
        echo "<img src='{$data['image_dir']}' width='40%' height='40%'>";
    }

    $pdo = null;
    ?>

    </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title> Result</title>
</head>
<body>
    <h2> Result</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        echo "<p>Name: $name</p>";
        echo "<p>Surname: $surname</p>";
        echo "<p>Email: $email</p>";
    
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>
</html>
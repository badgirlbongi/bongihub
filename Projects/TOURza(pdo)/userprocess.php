<?php

require_once 'db.php';
$db = new Database(); 

// Function to sanitize input data
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// If the form is submitted for sign-up
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    $userName = sanitize($_POST["signupUserName"]);
    $password = password_hash($_POST["signupPassword"], PASSWORD_DEFAULT);

    // Check if user already exists
    $stmt = $db->prepare("SELECT userID FROM user WHERE userName = ?");
    $stmt->execute([$userName]);
    $result = $stmt->fetchColumn();
    if ($result) {
        echo "User already exists.";
    } else {
        // Insert new user into the database
        $stmt = $db->prepare("INSERT INTO user (userName, password) VALUES (?, ?)");
        if ($stmt->execute([$userName, $password])) {
            echo "Sign-up successful.";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}

// If the form is submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $userName = sanitize($_POST["loginUserName"]);
    $password = $_POST["loginPassword"];

    // Retrieve user information from the database
    $stmt = $db->prepare("SELECT userID, password FROM user WHERE userName = ?");
    $stmt->execute([$userName]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        if (password_verify($password, $result["password"])) {
            echo "Login successful.";
            // Perform any necessary actions after successful login
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }
}

$db->closeConnection();
?>

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
    $password = sanitize(password_hash($_POST["signupPassword"], PASSWORD_DEFAULT));

    // Check if user already exists
    $stmt = $db->prepare("SELECT userID FROM user WHERE userName = ?");
    $stmt->execute([$userName]);
    $result = $stmt->fetchColumn();
    if ($result) {
        echo '<script>alert("User already exists."); window.location.href = document.referrer;</script>';
    } else {
        // Insert new user into the database
        $stmt = $db->prepare("INSERT INTO user (userName, password) VALUES (?, ?)");
        if ($stmt->execute([$userName, $password])) {
            echo '<script>alert("Sign-up successful."); window.location.href = document.referrer;</script>';
        } else {
            echo '<script>alert("Error!"); window.location.href = document.referrer;</script>';
        }
    }
}

// If the form is submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $userName = sanitize($_POST["loginUserName"]);
    $password = sanitize($_POST["loginPassword"]);

    // Retrieve user information from the database
    $stmt = $db->prepare("SELECT userID, password FROM user WHERE userName = ?");
    $stmt->execute([$userName]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        if (password_verify($password, $result["password"])) {
            echo '<script>alert("Login successful!"); window.location.href = "addplace.php";</script>';
        } else {
           
            echo '<script>alert("Incorrect password."); window.location.href = document.referrer;</script>';
        }
    } else {
        echo "User not found.";
    }
}

$db->closeConnection();
?>

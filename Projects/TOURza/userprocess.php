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
    $password2 = sanitize(password_hash($_POST["confirmPassword"], PASSWORD_DEFAULT));

    // checking if email format is correct
    if (!filter_var($userName, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // validating password
    function validatePassword($password) {
        // Check if password contains at least one capital letter
        if (!preg_match('/[A-Z]/', $password)) {
            return "Password must contain at least one capital letter.";
        }

        // Check if password contains at least one special character
        if (!preg_match('/[^a-zA-Z\d]/', $password)) {
            return "Password must contain at least one special character.";
        }

        // Check if password contains at least one number
        if (!preg_match('/\d/', $password)) {
            return "Password must contain at least one number.";
        }

        return true; // Password is valid
    }

    if ($password !== $password2) {
        die("Passwords do not match.");
    }

    $passVal = validatePassword($password);
    
    // Check if user already exists
    $stmt = $db->prepare("SELECT userID FROM user WHERE userName = ?");
    $stmt->execute([$userName]);
    $result = $stmt->fetchColumn();
    if ($result) {
        echo '<script>alert("User already exists."); window.location.href = document.referrer;</script>';
    } elseif ($passVal === true){
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

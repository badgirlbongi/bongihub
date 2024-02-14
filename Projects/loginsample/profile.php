<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION['username'];
echo "Welcome, $username!";
echo "<br><a href='logout.php'>Logout</a>";
?>

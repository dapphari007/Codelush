<?php
session_start();

// Check if user is logged in
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Hello, $username!";
} else {
    // Redirect to login page if user is not logged in
    header("Location: /login.php");
    exit();
}
?>

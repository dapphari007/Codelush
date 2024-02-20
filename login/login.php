<?php
session_start();

// Assuming you have a MySQL database setup with connection details
$servername = "sql213.infinityfree.com";
$username = "if0_35993731";
$password = "CfQX0CZOXlb";
$dbname = "if0_35993731_adminpanel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user input (optional)
    if (empty($username) || empty($password)) {
        echo "Please enter both username and password.";
    } else {
        // Query to retrieve user from database
        $sql = "SELECT * FROM students WHERE user_name='$username'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            // User found
            $row = $result->fetch_assoc();
            $stored_password = $row['password'];
            
            // Compare passwords
            if ($password === $stored_password) {
                // Password is correct, start session and redirect to dashboard
                $_SESSION['username'] = $username;
                header("Location: trial.html");
                exit();
            } else {
                // Password is incorrect
                echo "Incorrect password.";
            }
        } else {
            // User not found
            echo "User not found.";
        }
    }
}

$conn->close();
?>

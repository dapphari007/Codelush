<?php
session_start();

// Assuming you have a MySQL database setup with connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

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
                // Password is correct, start session and store user's data
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $row['id']; // Assuming the column name is id
                header("Location: ../");
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

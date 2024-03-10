<?php
session_start();

// Assuming your database credentials
$host = 'localhost';
$dbname = 'students';
$username = 'root';
$password = '';

// Attempt to create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // If an error occurs, display the error message
    echo 'Connection failed: ' . $e->getMessage();
    // You may handle the error differently as per your application's requirements
}

// Initialize variables
$user_name = "";
$first_name = "";
$last_name = "";
$phone_number = "";
$email = "";
$designation = "";

// Check if session variable is set
if(isset($_SESSION['username'])) {
    $user_name = $_SESSION['username']; 

    try {
        // Fetch data from the database
        $stmt = $pdo->prepare('SELECT user_name, first_name, last_name, phone_number, email, designation FROM students WHERE user_name = :user_name');
        $stmt->execute(['user_name' => $user_name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Assign the retrieved data to variables
            $user_name = $row['user_name'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $phone_number = $row['phone_number'];
            $email = $row['email'];
            $designation = $row['designation'];
        } else {
            echo "Data not found in the database for the specified username.";
        }
    } catch(PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
    }
} else {
    echo "Session variable 'username' is not set.";
}
?>

<!-- Your HTML code for the profile page goes here -->

<?php
session_start();

// Database connection parameters
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $birthday = $_POST['birthday'];
    $country = $_POST['country'];
    $designation = $_POST['designation'];
    $website = $_POST['website'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $google_plus = $_POST['google_plus'];
    $linkedin = $_POST['linkedin'];
    $instagram = $_POST['instagram'];

    // Retrieve username from session
    $username = $_SESSION['username'];

    // Update user information in the database
    $sql = "UPDATE students SET 
            first_name=?,
            last_name=?,
            email=?,
            bio=?,
            birthday=?,
            country=?,
            designation=?,
            website=?,
            twitter=?,
            facebook=?,
            google_plus=?,
            linkedin=?,
            instagram=?
            WHERE user_name=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssss", $first_name, $last_name, $email, $bio, $birthday, $country, $designation, $website, $twitter, $facebook, $google_plus, $linkedin, $instagram, $username);

    if ($stmt->execute()) {
        echo "User information updated successfully";
    } else {
        echo "Error updating user information: " . $conn->error;
    }

    $stmt->close();
}

// Close database connection
$conn->close();
?>

<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";
$table = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // First Page Fields
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $user_name = $_POST['username']; // Change to 'user_name'
    $password = $_POST['password'];
    $designation = $_POST['designation'];

    // Additional Information Fields
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $university = $_POST['university'];
    $degree = $_POST['degree'];
    $major = $_POST['major'];
    $graduation_year = $_POST['graduation_year'];
    $position = $_POST['position'];
    $cover_letter = $_POST['cover_letter'];

    // Store data in session variables if needed
    $_SESSION['first_name'] = $first_name;
    // Store other data in session variables if needed

    // Insert data into the database
    $sql = "INSERT INTO $table (first_name, last_name, email, phone_number, user_name, password, designation, address, city, state, zip_code, university, degree, major, graduation_year, position, cover_letter) 
            VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$user_name', '$password', '$designation', '$address', '$city', '$state', '$zip_code', '$university', '$degree', '$major', '$graduation_year', '$position', '$cover_letter')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a success page if needed 
        header("Location: ../html/login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

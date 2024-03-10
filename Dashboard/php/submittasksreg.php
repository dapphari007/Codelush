<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database server is on a different host
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "students"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve task links from the form
    $task1_link = $_POST["task1_link"];
    $task2_link = $_POST["task2_link"];
    $task3_link = $_POST["task3_link"];
    $task4_link = $_POST["task4_link"];

    // Prepare SQL statement to insert data into the 'students' table
    $sql = "INSERT INTO students (task1_link, task2_link, task3_link, task4_link) VALUES (?, ?, ?, ?)";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $task1_link, $task2_link, $task3_link, $task4_link);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<h1>Form Submission Successful</h1>";
        echo "<p>Task links have been successfully submitted.</p>";
    } else {
        echo "<h1>Error</h1>";
        echo "<p>There was an error submitting the form. Please try again.</p>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted, display an error message
    echo "<h1>Error</h1>";
    echo "<p>Form submission failed. Please try again.</p>";
}
?>

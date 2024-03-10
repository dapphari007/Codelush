<?php
// Step 1: Connect to your MySQL database
$servername = "localhost"; // Change this to your servername if it's different
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "task_manager"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Execute a SELECT query to fetch data for all tasks
$sql = "SELECT task_name, overview FROM tasks";
$result = $conn->query($sql);

// Step 3: Process the retrieved data and return it as an array
$tasks = [];
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }
}

// Close connection
$conn->close();

// Return tasks array
echo json_encode($tasks);
?>

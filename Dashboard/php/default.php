<?php
session_start();

// Assuming your database credentials
$host = 'localhost';
$dbname = 'students';
$username = 'root';
$password = ''; // Update with your database password

// Initialize variables
$user_name = "";
$id = "";
$designation = "";

// Check if session variable is set
if(isset($_SESSION['username'])) {
    $user_name = $_SESSION['username']; 

    try {
        // Create a PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch id and designation from the database
        $stmt = $pdo->prepare('SELECT id, designation FROM students WHERE user_name = :user_name');
        $stmt->execute(['user_name' => $user_name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Assign the retrieved id and designation to variables
            $id = "CL324" . $row['id'];
            $designation = $row['designation'];
        } else {
            // Return an error if user data not found
            echo json_encode(array("error" => "ID or designation not found in the database."));
            exit;
        }
    } catch(PDOException $e) {
        // Return an error if database query fails
        echo json_encode(array("error" => "Query failed: " . $e->getMessage()));
        exit;
    }
} else {
    // Return an error if session variable 'username' is not set
    echo json_encode(array("error" => "Session variable 'username' is not set."));
    exit;
}

// Return user data as JSON
echo json_encode(array("user_name" => $user_name, "id" => $id, "designation" => $designation));
?>

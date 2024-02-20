<?php
// Place PHP code at the top or in a separate PHP file

// Database connection
$servername = "sql213.infinityfree.com";
$username = "if0_35993731";
$password = "CfQX0CZOXlb";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$username = $_POST['username'];
$password = $_POST['password'];

// Check if email, phone number, or username already exists in the database
$check_email_query = "SELECT * FROM students WHERE email='$email'";
$check_phone_query = "SELECT * FROM students WHERE phone_number='$phone_number'";
$check_username_query = "SELECT * FROM students WHERE user_name='$username'";

$email_result = $conn->query($check_email_query);
$phone_result = $conn->query($check_phone_query);
$username_result = $conn->query($check_username_query);

if ($email_result->num_rows > 0) {
    $error_message = "Error: Email already exists.";
} elseif ($phone_result->num_rows > 0) {
    $error_message = "Error: Phone number already exists.";
} elseif ($username_result->num_rows > 0) {
    $error_message = "Error: Username already taken.";
} else {
    // SQL to insert data
    $sql = "INSERT INTO students (first_name, last_name, email, phone_number, user_name, password) VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login.html or any other page
        header("Location: index.html");
        exit(); // Make sure no other output is sent
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

<script>
  var error = "<?php echo $error_message; ?>";
  if (error) {
    // Display error message as an alert
    alert(error);
    // Display error message as a confirm dialog
    var confirmation = confirm(error + "\nClick OK to go back to the registration form.");
    if (confirmation) {
      window.location.href = "register.html";
    } else {
      // Handle if the user chooses to stay on the current page
    }
  }
</script>

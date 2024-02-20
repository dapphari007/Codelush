<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Example: send an email (you may replace this with your desired action)
    $to = "codelush@gmail.com";
    $subject = "New contact form submission";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
    mail($to, $subject, $body);

    // Optionally, you can send a response back to the client
    echo "Message sent successfully!";
}
?>

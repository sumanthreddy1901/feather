<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    

    $to = "sumanthreddy192002@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "<h2>Thank you for contacting us!</h2>";
    } else {
        echo "<h2>Oops! Something went wrong. Please try again later.</h2>";
    }
}
?>

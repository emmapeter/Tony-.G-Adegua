<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $message = $_POST["message"];

    $to      = "you@example.com";  // Change to your email
    $subject = "Contact Form Message";
    $body    = "From: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "your_email@example.com"; // Replace with your actual email
    $subject = "Portfolio Contact Form Submission";
    $body = "Name: $name\\nEmail: $email\\nMessage:\\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Something went wrong. Try again later.";
    }
}
?>
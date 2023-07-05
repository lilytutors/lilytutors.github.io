<?php
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // echo "Success!"; this works

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email_address'];
    $input_message = $_POST['message'];

    // Construct email body
    $to = " . $email . ";
    $subject = "New Contact Form Submission";
    $message = "Your input: " . $name . " (" . $email . ") : " . $input_message . "\n";
    $body = " ".$name." (".$email.") wrote to you: ".$input_message."  \n";

    // Send email
    $mailSent = mail($to, $subject, $body);

    if ($mailSent) {

        header("Location: confirmation.html?message=" . urlencode($message));
        exit();
    } else {
        echo "Error sending email.";
    }
}

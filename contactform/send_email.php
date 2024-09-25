<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "mkmlwin@gmail.com";

    // Email subject and message
    $fullMessage = "Name: " . $name . "\n";
    $fullMessage .= "Email: " . $email . "\n\n";
    $fullMessage .= "Message: \n" . $message;

    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    // Send the email using PHP's mail() function
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>

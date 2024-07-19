<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set recipient email address
    $to = 'maajid808@gmail.com';
    
    // Subject of the email
    $subject = 'New Contact Form Submission';
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'Your message has been sent successfully.';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
} else {
    echo 'Method not allowed.';
}
?>

<?php
// Get form data safely
$name    = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email   = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$phone   = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
$business= isset($_POST['business']) ? htmlspecialchars($_POST['business']) : '';
$message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
$confidentiality = isset($_POST['confidentiality']) ? 'Agreed' : 'Not agreed';

// Your email address
$to = "your@email.com";

// Subject
$subject = "New Contact Form Submission from $name";

// Email content
$body = "Name: $name\nEmail: $email\nPhone: $phone\nBusiness: $business\nMessage: $message\nConfidentiality: $confidentiality";

// Additional headers
$headers = "From: $email";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "success";
} else {
    echo "error";
}
?>

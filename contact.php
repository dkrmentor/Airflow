<?php
if (isset($_POST['esubmit'])) {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Build email message
  $to = 'dkrmentor@gmail.com'; // Replace with your email address
  $headers = "From: $name <$email>";
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Subject: $subject\n";
  $message .= "Message: $message\n";

  // Send email
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo "Your message has been sent. Thank you!";
  } else {
    // Error sending email
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>

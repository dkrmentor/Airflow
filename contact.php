<?php
if (isset($_POST['csubmit'])) {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Build email message
  $to = 'your-email@example.com'; // Replace with your email address
  $subject = "New Contact Form Submission: $subject";
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Message: $message\n";

  // Send email
  $headers = "From: $name <$email>";
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    ?>
    <script>window.location.href='index.html?submitted=1';</script>
    <?php
  } else {
    // Error sending email
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>

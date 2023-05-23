<?php
if (isset($_POST['name'])) {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Build email message
  $to = 'aflowpros@gmail.com'; // Replace with your email address
  $headers = "From: Airflow Pros <noreply@airflowpros.us>";
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Subject: $subject\n";
  $message .= "Message: $message\n";

  // Send email
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    ?>
    <script>window.location.href='index.html?submitted=2';</script>
    <?php
  } else {
    // Error sending email
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>

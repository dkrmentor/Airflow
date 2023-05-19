<?php
if (isset($_POST['esubmit'])) {
  // Retrieve form data
  $name = $_POST['name'];
  $address = $_POST['Locality'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $state = $_POST['state'];
  $zip = $_POST['Zip'];
  $package = $_POST['package-select'];

  // Build email message
  $to = 'dkrmentor@gmail.com'; // Replace with your email address
  // $to = 'aflowpros@gmail.com'; // Replace with your email address
  $subject = 'New Appointment Booking';
  $message = "Name: $name\n";
  $message .= "Address: $address\n";
  $message .= "Phone: $phone\n";
  $message .= "Date: $date\n";
  $message .= "State: $state\n";
  $message .= "ZIP-Code: $zip\n";
  $message .= "Package: $package\n";

  // Send email
  $headers = "From: $name <$to>";
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    //echo "Thank you for booking an appointment. We will contact you shortly.";
    ?>
    <script>window.location.href='index.html?submitted=1';</script>
    <?php
  } else {
    // Error sending email
    echo "Sorry, there was an error booking your appointment. Please try again later.";
  }
}
?>
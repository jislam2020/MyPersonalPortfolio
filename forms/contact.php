<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  // Replace contact@example.com(opens in new tab) with your real receiving email address
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
// Create the email and send the message
$to = "islamjahid316@gmail.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com(opens in new tab) - This is where the form will send a message to.
$subject = "New User:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
$header = "From: noreply@noorulkarim.com(opens in new tab)\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com(opens in new tab).
$header .= "Reply-To: $email";
if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>






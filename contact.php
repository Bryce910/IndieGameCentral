<?php
/* Form Data */
$to = "contact@indiegamecentral.com";
$subject = "Contact Requested";
$email = $_POST['email'];
$name = $_POST['name'];
$userMessage = $_POST['message'];
$message = "From: " . $name . '\n' . "Message: " .  '\n' . $userMessage;
$headers = "From: " . $email . '\r\n' . "Reply-To" . $email . '\r\n';
/* Mail to contact@indiegamecentral.com the above data */
mail($to, $subject, $message, $headers);

?>
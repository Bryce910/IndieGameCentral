<?php
	/* Form Data */
	$to = "qa@indiegamecentral.com";
	$subject = "QA Requested";
	$email = $_POST['QAemail'];
	$name = $_POST['QAname'];
	$title = $_POST['QAtitle'];
	$budget = $_POST['QAbudget'];
	$platform = $_POST['QAplatform'];
	$startDate = $_POST['QAdate'];
	$message = "From: " . $name . '\n' . "Title: " .  '\n' . $title . '\n' . 'Platform:' .  '\n' . $platform . '\n' . 'Budget: ' . '\n' . $budget . '\n' . 'Start Date: ' . '\n' . $startDate;
	$headers = "From: " . $email . '\r\n' . "Reply-To" . $email . '\r\n';
     /* Mail to qa@indiegamecentral.com the above data */
	mail($to, $subject, $message, $headers);


?>
<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "thusasechabaapp@gmail.com";
	$to = "thato@communityconstituency.org.za, thato.mohono@gmail.com";

	$subject = "Notification from thusasechaba. Reference Number: ".$unique_code;
	$email_message =$remark;
	$email_message .=$link_to_url;
	$headers = "From: " . $from; 

	mail ($to, $subject, $email_message, $headers);

	echo "The email message was successfully sent.";

?>
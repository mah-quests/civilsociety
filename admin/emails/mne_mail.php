<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "thusasechabaapp@gmail.com";
	$to = "project@communityconstituency.org.za, development@ac2.org.za, derrick@communityconstituency.org.za";

	$subject = "Notification from thusasechaba. Reference Number: ".$unique_code;
	$email_message =$remark;
	$email_message .=$link_to_url;
	$headers = "From: " . $from; 

	mail ($to, $subject, $email_message, $headers);

	echo "The email message was successfully sent.";

?>
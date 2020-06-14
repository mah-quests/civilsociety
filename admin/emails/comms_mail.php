<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "notification@thusasechaba.org.za";
	$to = "nelisa.ngqulana@gmail.com";

	$subject = "Notification from thusasechaba. Reference Number: ".$unique_code;
	$message = $username. " initiated a request for your attention. \r\n  \r\n";
	$message .=$remark;
	$message .=$link_to_url;
	$headers = "From: " . $from;

	mail ($to, $subject, $message, $headers);

	echo "The email message was successfully sent.";

?>
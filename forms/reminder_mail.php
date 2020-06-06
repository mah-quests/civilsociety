<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "notification@thusasechaba.org.za";
	$to = "thato@communityconstituency.org.za";

	$subject = "Reminder on the task";
	$message = "Please remeber to complete your timesheet once you're done with your tasks. And also give bried description of the tasks carried out. ";
	$headers = "From: " . $from; 

	mail ($to, $subject, $message, $headers);

	echo "The email message was successfully sent.";

?>
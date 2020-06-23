<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "notification@thusasechaba.org.za";
	$to = $agent_email;

	$subject = "Welcome to Thusa Sechaba Web Application";
	$email_message="Dear ".$agent_name;
	$email_message .="

Thank you for registering as a Thusa Sechaba Agent.

> I am, You are, We are together in ending COVID-19


If you encounter any technical difficulties or technical support related issues, log a call by clicking on this link:
http://communityconstituency.org.za/support


For training on how to register a household need, click on this link:
https://drive.google.com/file/d/1hcUCBcYU7gV65y8yqvnWWMY97cNbc9DA/view?usp=sharing


Kind Regards,
Thusa Sechaba Support Team
support@thusasechaba.org.za
";
	$headers = "From: " . $from;

	mail ($to, $subject, $email_message, $headers);


?>



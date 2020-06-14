<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "notification@thusasechaba.org.za";
	$to = $agent_email;

	$subject = "Household Request Completed. Reference Number: ".$unique_code;
	$message="Dear ".$agent_name;
	$message .="

Congradulations, you have successfully completed a household request.

Contact Person: $household_contact
Contact Number: $household_phone
Household Address: $household_address
Reference Number: $unique_code


Our call center agents will be in contact with the household soon. The reference number for this request is $unique_code.

So, you can keep the reference number and ask for updates from the contact center whenever necessary.

> I am, You are, We are together in ending COVID-19 <


If you encounter any technical difficulties or technical support related issues, log a call by clicking on this link:
http://communityconstituency.org.za/support


For training on how to register a household need, click on this link:
https://drive.google.com/file/d/1hcUCBcYU7gV65y8yqvnWWMY97cNbc9DA/view?usp=sharing


Kind Regards,
Thusa Sechaba Support Team
support@thusasechaba.org.za
";
	$headers = "From: " . $from;

	mail ($to, $subject, $message, $headers);


?>
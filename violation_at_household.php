<?php

	ini_set('display_errirs', 1 );
	error_reporting ( E_ALL );

	$from = "notification@thusasechaba.org.za";
	$to = "humansrights@communityconstituency.org.za, npoadmin@communityconstituency.org.za";

	$subject = "Household Violation Registered. Reference Number: ".$unique_code;
	$message="Dear Human Rights Streamhead";
	$message .="

There has been a possible violation that has been registered with the details below.

Contact Person: $household_contact
Contact Number: $household_phone
Household Address: $household_address
Municipality, District and Province: $household_municipality, $household_district, $household_province
Reference Number: $unique_code

Please reach out to the contact person above to verify the violation.

For further details, you can visit the thusasechaba admin to view full details using the reference number mentioned above.

Kind Regards,
Thusa Sechaba Support Team
support@thusasechaba.org.za
";
	$headers = "From: " . $from;

	mail ($to, $subject, $message, $headers);


?>
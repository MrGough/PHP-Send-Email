<?php  
  $EMAIL = [];

	$EMAIL['HEADER'] = "From:me@mywebsite.co.uk \r\n";
	$EMAIL['HEADER'] .= "MIME-Version: 1.0\r\n";
	$EMAIL['HEADER'] .= "Content-type: text/html\r\n";
	
	# 
	$EMAIL['ADDRESS'] = 'edwardgough@mywebsite.co.uk';
	
	# EMAIL SUBJECT
	$EMAIL['SUBJECT'] = "Testing Email";

	# FULL EMAIL BODY
	$EMAIL['MESSAGE'] .= "
		Good Morning,
		
		<br><br>
		
		This is a test email. Hopefully this works this time!
		
	";

	# EMAIL SEND ACTION
	$EMAIL['SEND'] = mail($EMAIL['ADDRESS'], $EMAIL['SUBJECT'], $EMAIL['MESSAGE'], $EMAIL['HEADER']);
  
?>

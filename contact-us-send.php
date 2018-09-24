<?php

	if(isset($_POST['submit'])) {
		
		$msg = 'Name: ' . $_POST['name'] . "\n" . 'Email: ' . $_POST['email'] ."\n" . 'Comment: ' . $_POST['comment']  ;
		mail('example@example.com', 'Sample contact us form ', $msg);
		header('location: contact-us-thank-you.php');


	}
	else {
		header('location: contact-us.php');
		exit(0);
	}

?>
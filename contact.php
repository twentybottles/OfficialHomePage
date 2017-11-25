<?php
	require_once 'header.php';
	$sendMail = false;
	if(array_key_exists("submit", $_GET)) {
		require_once 'required_check.php';
		if(requiredCheck()) {
			require_once 'send_mail.php';
			$sendMail = true;
		}
	}
	if(!$sendMail) require_once 'main_contact.php';
	require_once 'footer.php';
?>

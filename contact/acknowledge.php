
<?php

	if(isset($_POST['send'])) {

		$to = 'andresjmez@gmail.com';
		$subject = 'Whats up, this is me';

		$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
		$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
		$message .= 'Comments: ' . $_POST['message'];

		//echo $message;

		$success = mail($to, $subject, $message, $headers);

	}

?>


<!DOCTYPE html>
<html lang="en">

	<body>
	
	<?php if(isset($success) && $success) { ?>
		<h1>Thank you</h1>
		<p>Your message has been sent</p>
	<?php } else { ?>
		<h1>Oops</h1>
		<p>Sorry, There was an error sending your message</p>
	<?php } ?>

	</body>

</html>
<?php

	if(isset($_POST['send'])) {

		$to = 'andresjmez@gmail.com';
		$subject = 'Whats up, this is me';

		$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
		$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
		$message .= 'Comments: ' . $_POST['message'];

		$headers = "From: user@andresjmez.com\r\n";
		$headers .= 'Content-Type: text/plain; charset=utf-8';

		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		if ($email) {
			$headers .= "\r\nReply-To: $email";
		}

		$success = mail($to, $subject, $message, $headers, '-fandresjmez@gmail.com');
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		$slicknav_styles = "../site/css/slicknav.css";
		$site_styles = "../site/css/myStyles.css";
		$slicknav_min_js = "../site/js/jquery.slicknav.min.js";
		$init_responsive = "../site/js/initResponsive.js";
		$restive_min_js = "../site/js/restive.min.js";
		$favicon = "../favicon.ico";
		$current_title = "Sent Mail";
		include("../site/includes/header.php"); ?>
	</head>

	<body id="contact">    
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Main Menu -->
			<div class="pages">
				<ul id="top-menu">
					<li><a href="../" id="homeNav">Home</a></li>
					<li><a href="../about/" id="aboutNav">About</a></li>
					<li><a href="../contact/" id="contactNav">Contact</a></li>
					<li><a href="../projects/" id="projectsNav">Projects</a></li>
					<li id="loginLink"><a href="../login">Login</a></li>
					<!-- <li><a href="cs345f14.html">Fall</a></li>  -->
				</ul>
			</div>

			<!-- Mobile Menu -->
			<div class="mobile_nav">
				<ul class="mobile_menu">
					<li><a href="../" id="homeNav">Home</a></li>
					<li><a href="../about/" id="aboutNav">About</a></li>
					<li><a href="../contact/" id="contactNav">Contact</a></li>
					<li><a href="../projects/" id="projectsNav">Projects</a></li>
					<li id="loginLink"><a href="../login">Login</a></li>
				</ul>
			</div>

			<!-- Main Content of Page -->
			<div class="content">
				<div class="page_content">
					<div id="mail_status">
						<img src="../site/media/mail.png" alt="Mail Icon" id="sent_logo">
						<?php if(isset($success) && $success) { ?>
							<h2>Thank you</h2>
							<p>Your message has been sent</p>
						<?php } else { ?>
							<h2>Oops</h2>
							<p>Sorry, There was an error sending your message</p>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>

		<!-- Footer -->
			<?php
			$github_footer = "../site/media/github_white.png";
			$contact_page = "../contact/";
			$mail_footer = "../site/media/mail.png";
			include("../site/includes/footer.php"); ?>

		<!-- end Footer -->

	</body>
</html>
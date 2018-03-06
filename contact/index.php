<?php session_start(); ?>
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
		$current_title = "Contact";
		include("../site/includes/header.php"); ?>
	</head>

	<body id="contact">    
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Menu nav inserted-->
			<?php include('../site/includes/menu.php'); ?>

			<!-- Main Content of Page -->
			<div class="content">
				<div class="page_content">
					<div id="contact_heading">
						<p id="welcome_name">
							<?php
								if (isset($_SESSION['login_user'])) {
									echo "Hello " . $_SESSION['login_user'];
								}
							?>
						</p>
						<div id="pagetop-name">
							<p id="pagetop-first">Andres</p>
							<p id="pagetop-last">Jimenez</p> 
						</div>
						<p id="contact_name">Andres Jimenez</p>
						<p id="contact_punchline">reach me at my email address below or simply fill out the form and send...</p>
					</div>
					<div id="contact_line"></div>
					<div id="contact_area">
						<div id="mail_logo">
							<a href="mailto:andresjmez@gmail.com"><img src="../site/media/mail.png" alt="Email me" title="Email me" id="contact_logo"></a>
						</div>
						<div id="email_text_div">
							<p>andresjmez@gmail.com</p>
							<p>--or--</p>
						</div>
						<div id="contact_form_div">
							<form id="contactForm" method="post" action="mailSent.php">
								<label><input type="text" class="contactMe" id="contactMeName" name="name" placeholder="Your Name" required></label>
								<label><input type="text" class="contactMe" id="contactMeEmail" name="email" type="email" placeholder="Your Email Address" required></label>
								<label><textarea id="contactMeMessage" name="message" placeholder="Your Message..." required></textarea></label>
								<input type="submit" id="contactMeSubmit" name="send" value="Deliver">
							</form>
						</div>
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
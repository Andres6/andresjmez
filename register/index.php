<?php
	session_start();
	if(isset($_SESSION['login_user'])) {
		header('Location: ../profile/index.php');
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
			$current_title = "Login";
			include("../site/includes/header.php");
		?>
	</head>

	<body id="register">    
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Menu nav inserted-->
			<?php include('../site/includes/menu.php'); ?>

			<!-- Main Content of Page -->
			<div class="content">
				<div id="page_content">
					<div id="contact_heading">
						<div id="pagetop-name">
							<p id="pagetop-first-link">andres</p>
							<p id="pagetop-last-link">jmez.com</p> 
						</div>
						<p id="contact_punchline">Register for your account here</p>
					</div>
					<div id="contact_line"></div>
					
					<div id="contact_area">
						<p>Sign up</p>
						<span><?php echo $_SESSION['message']; ?></span>
						<div id="contact_form_div">
							<form id="contactForm" method="post" action="register.php">
								<label><input type="text" class="contactMe" id="contactMeName" name="username" placeholder="Username" required></label>
								<label><input type="email" class="contactMe" id="contactMeEmail" name="email" placeholder="Email" required></label>
								<label><input type="password" class="contactMe" id="contactMeEmail" name="password" placeholder="Password" required></label>
								<label><input type="password" class="contactMe" id="contactMeEmail" name="confirm_password" placeholder="Confirm password" required></label>
								<input type="submit" id="contactMeSubmit" name="register" value="Register">
							</form>
							<?php
								if (isset($_SESSION['login_error'])) {
									$error = $_SESSION['login_error'];
									echo "<span>$error</span>";
								}
							?>
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
				include("../site/includes/footer.php"); 
			?>
		<!-- end Footer -->

	</body>
</html>
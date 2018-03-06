
<?php
	include('loginSubmit.php');
	if(isset($_SESSION['login_user'])) {
		header("Location: ../projects/index.php");
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

	<body id="login">    
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
						<p id="contact_punchline">login here with your username and password</p>
					</div>
					<div id="contact_line"></div>
					
					<div id="contact_area">
						<p>Login</p>
						<div id="contact_form_div">
							<form id="contactForm" method="post" action="loginSubmit.php">
								<label><input type="text" class="contactMe" id="contactMeName" name="username" placeholder="Username" required></label>
								<label><input type="password" class="contactMe" id="contactMeEmail" name="password" placeholder="Password" required></label>
								<input type="submit" id="contactMeSubmit" name="login" value="Login">
								<a href="../register/index.php">Register</a>
							</form>
							<?php
								if (isset($_SESSION['login_error'])) {
									$error = $_SESSION['login_error'];
									echo "<span>$error</span>";
									unset($_SESSION['login_error']);
								}
							?>
						</div>
					</div>

				</div>
			</div>

	</head>

	<body id="login">
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Main Menu -->
			<div class="pages">
				<ul id="top-menu">
					<li><a href="../" id="homeNav">Home</a></li>
					<li><a href="../about/" id="aboutNav">About</a></li>
					<li><a href="../contact/" id="contactNav">Contact</a></li>
					<li><a href="../projects/" id="projectsNav">Projects</a></li>
					<!-- <li><a href="login/" id="loginHerePage">Login</a></li> -->
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
				</ul>
			</div>

			<!-- Main Content of Page -->
			<div class="content">
				<div id="contact_content">
					<div id="contact_heading">
						<div id="pagetop-name">
							<p id="pagetop-first">Andres</p>
							<p id="pagetop-last">Jimenez</p> 
						</div>
						<p id="contact_name">Andres Jimenez</p>
						<p id="contact_punchline">login here with your username and password</p>
					</div>
					<div id="contact_line"></div>
					<div id="contact_area">
						<div id="contact_form_div">
							<form id="contactForm" method="post" action="mailSentt.php">
								<label><input type="text" class="contactMe" id="contactMeName" name="name" placeholder="Username" required></label>
								<label><input type="text" class="contactMe" id="contactMeEmail" name="email" type="email" placeholder="Password" required></label>
								<!-- <label><textarea id="contactMeMessage" name="message" placeholder="Your Message..." required></textarea></label> -->
								<input type="submit" id="contactMeSubmit" name="send" value="Login">
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
				include("../site/includes/footer.php"); 
			?>
		<!-- end Footer -->

	</body>
</html>
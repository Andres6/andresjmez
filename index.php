<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		$slicknav_styles = "site/css/slicknav.css";
		$site_styles = "site/css/myStyles.css";
		$slicknav_min_js = "site/js/jquery.slicknav.min.js";
		$init_responsive = "site/js/initResponsive.js";
		$restive_min_js = "site/js/restive.min.js";
		$favicon = "favicon.ico";
		$current_title = "Home";
		include("site/includes/header.php"); ?>
	</head>

	<body id="home">
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Main Menu -->
			<nav id="global-nav">
				<div class="pages">
					<ul id="top-menu">
						<li><a href="." id="homeNav">Home</a></li>
						<li><a href="about/" id="aboutNav">About</a></li>
						<li><a href="contact/" id="contactNav">Contact</a></li>
						<li><a href="projects/" id="projectsNav">Projects</a></li>
						<!-- <li><a href="login/" id="loginHerePage">Login</a></li> -->
						<!-- <li><a href="cs345f14.html">Fall</a></li>  -->
					</ul>
				</div>
			</nav>
			<!-- Mobile Menu -->
			<div class="mobile_nav">
				<ul class="mobile_menu">
					<li><a href="." id="homeNav">Home</a></li>
					<li><a href="about/" id="aboutNav">About</a></li>
					<li><a href="contact/" id="contactNav">Contact</a></li>
					<li><a href="projects/" id="projectsNav">Projects</a></li>
				</ul>
			</div>

			<!-- Login for Site -->
			<!-- <div id="loginArea">
				<a href="login/" id="loginPage">Login</a>
			</div> -->
			
			<!-- Main Content of Page -->
			<div class="content">
				<div id="home_content">
					<div id="text-photo">
						<div id="name">
							<p id="First">Andres</p>
							<p id="Last">Jimenez</p> 
						</div>
						<div class="my_image_div">
							<img src="site/media/silhouette12k.png" alt="My photo for the front page" title="Andres Jimenez" width="700" height="1016" id="my_image">
						</div>
					</div>
					<div class="intro_line"></div>
					<div class="hello-world">
						<p>Hello, World! Software developer here.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
			<?php
			$github_footer = "site/media/github_white.png";
			$contact_page = "contact/";
			$mail_footer = "site/media/mail.png";
			include("site/includes/footer.php"); ?>

		<!-- end Footer -->

	</body>
</html>

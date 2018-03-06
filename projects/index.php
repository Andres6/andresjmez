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
		$current_title = "Projects";
		include('../site/includes/header.php'); ?>
	</head>

	<body id="projects">    
		<!-- Full Site -->
		<div class="wrapper">


			<!-- Menu nav inserted-->
			<?php include('../site/includes/menu.php'); ?>

			<!-- Main Menu -->
			<div class="pages">
				<ul id="top-menu">
					<li><a href="../" id="homeNav">Home</a></li>
					<li><a href="../about/" id="aboutNav">About</a></li>
					<li><a href="../contact/" id="contactNav">Contact</a></li>
					<li><a href="../projects/" id="projectsNav">Projects</a></li>
					<li id="loginLink"><a href="../login/">Login</a></li>
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
					<li id="loginLink"><a href="../login/">Login</a></li>
				</ul>
			</div>

			<!-- Main Content of Page -->
			<div class="content">
				<div id="projects_content">
					<div id="projects_heading">
						<p id="welcome_name">
							<?php
								if (isset($_SESSION['login_user'])) {
									echo "Hello " . $_SESSION['login_user'];
								}
							?>
						</p>
						<div id="pagetop-name">
							<p id="pagetop-first-link">andres</p>
							<p id="pagetop-last-link">jmez.com</p> 
						</div>
						<p id="projects_name">Andres Jimenez</p>
						<p id="projects_punchline">check out some of my projects...</p>
					</div>
					<div id="projects_line"></div>
					<div id="projects_list">
						<div id="dog_age_link">
							<a href="dog-age-calculator/">Dog Age Calculator</a>
							<p>A popular myth is that one "human year" is equal to "seven dog years". This is not very accurate because there are many factors to consider when approximating your best friend's age. Click on my calculator link above to get a much closer estimate of their age and how it is calculated.</p>
						</div>
						<div id="projects_divide"></div>
						<div id="project_x">
							<a href="#">Project X</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sapien libero, ultricies eu placerat sed, condimentum in elit. Duis placerat nulla convallis elit aliquet, a elementum ex porta. Vivamus mauris ante, faucibus ac rutrum a, venenatis non massa. Nam id dolor non ante pharetra auctor euismod vitae lectus.</p>
						</div>
						<div id="projects_divide"></div>
						<div id="project_y">
							<a href="#">Project Y</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sapien libero, ultricies eu placerat sed, condimentum in elit. Duis placerat nulla convallis elit aliquet, a elementum ex porta. Vivamus mauris ante, faucibus ac rutrum a, venenatis non massa. Nam id dolor non ante pharetra auctor euismod vitae lectus.</p>
						</div>
						<div id="projects_divide"></div>
						<div id="project_z">
							<a href="#">Project Z</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sapien libero, ultricies eu placerat sed, condimentum in elit. Duis placerat nulla convallis elit aliquet, a elementum ex porta. Vivamus mauris ante, faucibus ac rutrum a, venenatis non massa. Nam id dolor non ante pharetra auctor euismod vitae lectus.</p>
						</div>
						<div id="projects_divide"></div>
					</div>
					<p>Oops! still under development, more coming soon...</p>
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

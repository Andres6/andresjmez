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
		include("../site/includes/header.php"); ?>
	</head>

	<body id="projects">    
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Main Menu -->
			<div class="pages">
				<ul id="top-menu">
					<li><a href="../" id="homeNav">Home</a></li>
					<li><a href="../about/" id="aboutNav">About</a></li>
					<li><a href="../contact/" id="contactNav">Contact</a></li>
					<li><a href="../projects/" id="projectsNav">Projects</a></li>
					<li id="loginLink"><a href="login/">Login</a></li>
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
				<div id="projects_content">
					<div id="projects_heading">
						<div id="pagetop-name">
							<p id="pagetop-first">Andres</p>
							<p id="pagetop-last">Jimenez</p> 
						</div>
						<p id="projects_name">Andres Jimenez</p>
						<p id="projects_punchline">check out some of my projects...</p>
					</div>
					<div id="projects_line"></div>
					<div id="projects_list">
						<div id="dog_age_link">
							<a href="dog-age-calculator/">Dog Age Calculator</a>
							<p>The common myth that 1 year is equal to 7 "human years" is actually not very accurate and it is only a quick quess that does not consider breed, weight, or size of an individual dog. If we consider some of these specific factors you can get a better approximation of the true age of your best friend. Use this tool to learn more and find out how old your dog actually is in "human years" considering 4 different sizes of dogs depending on weight.</p>
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

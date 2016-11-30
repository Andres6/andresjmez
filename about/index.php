<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
		$slicknav_styles = "../site/css/slicknav.css";
		$site_styles = "../site/css/myStyles.css";
		$slicknav_min_js = "../site/js/jquery.slicknav.min.js";
		$init_responsive = "../site/js/initResponsive.js";
		$restive_min_js = "../site/js/restive.min.js";
		include("../site/includes/header.php"); ?>
	</head>

	<body id="about">
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Main Menu -->
			<div class="pages">
				<ul id="top-menu">
					<li><a href="../" id="homeNav">Home</a></li>
					<li><a href="../about/" id="aboutNav">About</a></li>
					<li><a href="../contact/" id="contactNav">Contact</a></li>
					<li><a href="../projects/" id="projectsNav">Projects</a></li>
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
				<div id="about_content">
					<div id="about_heading">
						<div id="pagetop-name">
							<p id="pagetop-first">Andres</p>
							<p id="pagetop-last">Jimenez</p> 
							<div style="clear: both;"></div>
						</div>
						<p id="about_name">Andres Jimenez</p>
						<p id="about_punchline">a little about me...</p> 
						<!-- <p id="about_last">Jimenez</p> -->
					</div>
					<div id="about_line"></div>
					<div id="about_text">
						<p>I am a software developer based in northern New Jersey/New York City. I enjoy designing and programming software for different types of applications. I like taking intricate problems and applying logic to solve and create efficient applications.</p>
						<p>I developed this website myself to learn the ways of web development and also to play around with some fun project ideas. I am constantly working and updating my website and learning new skills in the process which is something I really enjoy.</p>
						<p>When my face is not chock-full o' code, I enjoy playing video games, playing sports, and just being outside(also inside) with my dogs. Pretty simple huh. Well thats me!</p>
						<p>If you want to know more feel free to contact me or view my resume below</p>
						<p><a id="resume-link" href="https://docs.google.com/document/d/1WWeqOfruzmxj5I7ay0reWW7TDyH0GGjrbCotRoZMjK0/edit?usp=sharing" target="_blank">Check out my resume</a></p>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div class="mastfoot">
			<div class="footer_name">
				<div class="social_icons">
					<ul id="social_list">
						<li><a href="https://github.com/Andres6" target="_blank" title="GitHub"><img src="../site/media/github_white.png" alt="GitHub" id="footer_github"/></a></li>
						<li><a href="../contact/" title="Contact Me"><img src="../site/media/mail.png" alt="Contact Me" id="footer_contact"/></a></li>
					</ul>
				</div>
				<p>Website designed and built by Andres Jimenez</p>
				<p id="dev_note">*site under development, more coming soon!</p>
			</div> 
		</div>

	</body>
</html>

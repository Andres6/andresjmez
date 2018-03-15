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
			$current_title = "About";
			require_once "../site/includes/header.php"; 
		?>
	</head>

	<body id="about">
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Menu nav inserted-->
			<?php require_once'../site/includes/menu.php'; ?>

			<!-- Main Content of Page -->
			<div class="content">
				<div class="page_content">
					<div id="about_heading">
						<p id="welcome_name">
							<?php
								if (isset($_SESSION['login_user'])) {
									echo "Hello " . $_SESSION['login_user'] . ". " . "<a href='../profile/'>Profile</a>";
								}
							?>
						</p>
						<div id="pagetop-name">
							<p id="pagetop-first">Andres</p>
							<p id="pagetop-last">Jimenezz</p> 
						</div>
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
			<?php
				$github_footer = "../site/media/github_white.png";
				$contact_page = "../contact/";
				$mail_footer = "../site/media/mail.png";
				require_once "../site/includes/footer.php"; 
			?>
		<!-- end Footer -->

	</body>
</html>

<?php session_start(); ?>
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
			include("site/includes/header.php"); 
		?>
	</head>

	<body id="home">
		<!-- Full Site -->
		<div class="wrapper">

			<?php include('site/includes/homeMenu.php'); ?>
			
			<!-- Main Content of Page -->
			<div class="content">
				<div class="page_content">
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
				include("site/includes/footer.php"); 
			?>
		<!-- end Footer -->

	</body>
</html>

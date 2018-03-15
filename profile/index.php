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

	<body id="profile">
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Menu nav inserted-->
			<?php require_once'../site/includes/menu.php'; ?>

			<!-- Main Content of Page -->
			<div class="content">
				<div class="page_content">
					<div id="about_heading">
						<p id="welcome_name">
							
						</p>
						<div id="pagetop-name">
							<p id="pagetop-first">Welcome </p>
							<p id="pagetop-last"><?php
								if (isset($_SESSION['login_user'])) {
									echo $_SESSION['login_user'];
								}
							?></p> 
						</div>
						<p id="about_punchline">How are you today? </p> 
						<!-- <p id="about_last">Jimenez</p> -->
					</div>
					<div id="about_line"></div>
					<div id="about_text">
						<p></p>
						<img src="https://placeimg.com/300/250/people">
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

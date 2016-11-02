<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- google font Roboto -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300|Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<!-- Custom styles for site  -->
		<link rel="stylesheet" href="../../site/css/slicknav.css">
		<link href="../../site/css/myStyles.css" rel="stylesheet">
		<!-- jQuery and jQuery UI-->
		<script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
		<script   src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"   integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="   crossorigin="anonymous"></script>
		<!-- Custom UI theme and jQuery Validate-->
        <link href="jquery-ui.css" rel="stylesheet">
        <script   src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

		<!-- Responsive links -->
		<script   src="../../site/js/jquery.slicknav.min.js"></script>
		<script   src="../../site/js/initResponsive.js"></script>
		<!-- restive js -->
		<script type="text/javascript" src="../../site/js/restive.min.js"></script>
		<script type="text/javascript">
			$(function(){
				if($.restive.isPC())
					{
						$('body').restive({
							breakpoints: ['560', '960'],
							classes: ['mobi phone', 'mobi tablet'],
							force_dip: true
						});
					}
				else if ($.restive.isMobile())
					{
						$('body').restive({
							breakpoints: ['10000'],
							classes: ['nb'],
							turbo_classes: 'is_mobile=mobi,is_phone=phone,is_tablet=tablet,is_landscape=landscape',
							force_dip: true
						});
					}
			});
		</script>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- for site responsiveness -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="keywords" content="andres, jimenez, tenafly, njit, software">
		<meta name="description" content="Personal Web Page of Andres Jimenez">
		<meta name="author" content="Andres Jimenez">
		<link rel="icon" href="../../site/media/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="../../site/media/favicon.ico" type="image/x-icon">
		<title>Web-site of Andres Jimenez</title>
		


		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-73977107-1', 'auto');
			ga('send', 'pageview');
		</script>

	</head>

	<body id="projects">    
		<!-- Full Site -->
		<div class="wrapper">

			<!-- Main Menu -->
			<div class="pages">
				<ul class="top-menu">
					<li><a href="../../" id="homeNav">Home</a></li>
					<li><a href="../../about/" id="aboutNav">About</a></li>
					<li><a href="../../contact/" id="contactNav">Contact</a></li>
					<li><a href="../../projects/" id="projectsNav">Projects</a></li>
					<!-- <li><a href="cs345f14.html">Fall</a></li>  -->
				</ul>
			</div>

			<!-- Mobile Menu -->
			<div class="mobile_nav">
				<ul class="mobile_menu">
					<li><a href="../../" id="homeNav">Home</a></li>
					<li><a href="../../about/" id="aboutNav">About</a></li>
					<li><a href="../../contact/" id="contactNav">Contact</a></li>
					<li><a href="../../projects/" id="projectsNav">Projects</a></li>
				</ul>
			</div>

			<!-- Main Content of Page -->
			<div class="content">
				<div id="dog_calc_content">
					<div id="dogAge_heading">
						<p id="dogAge_name">Dog Age Calculator</p>
						<p id="dogAge_punchline">find out how old your dog really is...</p>
					</div>
					<div id="dogAge_line"></div>
					<div id="dogAgeCalcDiv">
						<div id="dogFormDiv">
							<form id="getDogInfo">
								<h3 id="dog_calc_heading">How old is your dog? lets find out</h3>
								<fieldset id="dog_radioSet">
									<legend id="dog_size">Select your pup's size</legend>
									<div id="dogSizeError"></div>

									<label for="dogSmall">small<br><small>0-20 lbs.</small></label>
									<input type="radio" id="dogSmall" name="dogAgeRadio" value="1" required>

									<label for="dogMedium">medium<br><small>21-50 lbs.</small></label>
									<input type="radio" id="dogMedium" name="dogAgeRadio" value="2" required>

									<label for="dogLarge">large<br><small>51-90 lbs.</small></label>
									<input type="radio" id="dogLarge" name="dogAgeRadio" value="3" required>

									<label for="dogXLarge">x-large<br><small>90+ lbs</small></label>
									<input type="radio" id="dogXLarge" name="dogAgeRadio" value="4" required>
								</fieldset>
								<fieldset id="dog_human_age">
									<legend id="dog_age_years">Enter pup's age in human years</legend>
									<div id="humanAgeError"></div>
									<input class="ageInput" id="humanAge" name="humanAge" type="text" maxlength="4" required><br>
								</fieldset>
								<fieldset>
									<button class="dogAgeButton" type="button">Woof!</button>
								</fieldset>
							</form>
							<div id="ageResult">
								<p>Your dog is</p>
								<p id="answer"></p>
								<p>Years old</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div class="mastfoot">
			<div class="footer_name"> 
				<div class="social_icons"> 
					<ul id="social_list"> 
						<li><a href="https://github.com/Andres6" target="_blank" title="GitHub"><img src="../../site/media/github_white.png" id="footer_github"/></a></li>  
						<li><a href="../../contact/" title="Contact Me"><img src="../../site/media/mail.png" id="footer_contact"/></a></li> 
					</ul> 
				</div> 
				<p>Website designed and built by Andres Jimenez</p> 
				<p id="dev_note">*site under development, more coming soon!</p>  
			</div>
		</div>

		<script type="text/javascript" src="dog.js"></script>

	</body>
</html>

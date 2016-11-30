<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Roboto:300,400" rel="stylesheet">
		<!-- Custom styles for site  -->
		<link rel="stylesheet" href="../site/css/slicknav.css">
		<link href="../site/css/myStyles.css" rel="stylesheet">
		<!-- jQuery and jQuery UI -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Responsive links -->
		<script   src="../site/js/jquery.slicknav.min.js"></script>
		<script   src="../site/js/initResponsive.js"></script>
		<!-- restive js -->
		<script type="text/javascript" src="../site/js/restive.min.js"></script>
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
		<meta name="keywords" content="andres, jimenez, software, developer, software engineer, software developer">
		<meta name="description" content="Personal Web Page of Andres Jimenez">
		<meta name="author" content="Andres Jimenez">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="../site/media/favicon.ico" type="image/x-icon">
		<title>Web-site of Andres Jimenez</title>
		
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
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
				<div id="projects_content">
					<div id="projects_heading">
						<div id="pagetop-name">
							<p id="pagetop-first">Andres</p>
							<p id="pagetop-last">Jimenez</p> 
							<div style="clear: both;"></div>
						</div>
						<p id="projects_name">Andres Jimenez</p>
						<p id="projects_punchline">check out some of my projects...</p>
					</div>
					<div id="projects_line"></div>
					<div id="projects_list">
						<div id="dog_age_link">
							<a href="dog-age-calculator/">Dog Age Calculator</a>
							<p>The common myth of 1 year for your dog equals 7 "human years" is not exactly accurate as there are more factors to consider and a little more math involved in calculating your best friend's age. Use this calculator to learn more and find out how old your pup actually is in "human years" considering 4 different sizes of dogs depending on weight.</p>
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

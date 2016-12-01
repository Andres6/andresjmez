
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Roboto:300,400" rel="stylesheet">
		<!-- Custom styles for site  -->
		<link rel="stylesheet" href="<?php echo $slicknav_styles; ?>">
		<link href="<?php echo $site_styles; ?>" rel="stylesheet">
		<!-- jQuery and jQuery UI -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Responsive links -->
		<script   src="<?php echo $slicknav_min_js; ?>"></script>
		<script   src="<?php echo $init_responsive; ?>"></script>
		<!-- restive js -->
		<script type="text/javascript" src="<?php echo $restive_min_js; ?>"></script>
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
		<link rel="icon" href="<?php echo $favicon; ?>" type="image/x-icon">
		
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

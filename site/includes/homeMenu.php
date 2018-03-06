<!-- Main Menu -->
<nav id="global-nav">
	<div class="pages">
		<ul id="top-menu">
			<li><a href="." id="homeNav">Home</a></li>
			<li><a href="about/" id="aboutNav">About</a></li>
			<li><a href="contact/" id="contactNav">Contact</a></li>
			<li><a href="projects/" id="projectsNav">Projects</a></li>
			<?php
				if (isset($_SESSION['login_user'])) {
					echo "<li id='loginLink'><a href='login/logout.php'>Logout</a></li>";
				} else {
					echo "<li id='loginLink'><a href='login'>Login</a></li>";
				}
			?>
		</ul>
	</div>
</nav>
<!-- Mobile Menu -->
<nav id="global-nav">
	<div class="mobile_nav">
		<ul class="mobile_menu">
			<li><a href="." id="homeNav">Home</a></li>
			<li><a href="about/" id="aboutNav">About</a></li>
			<li><a href="contact/" id="contactNav">Contact</a></li>
			<li><a href="projects/" id="projectsNav">Projects</a></li>
			<?php
				if (isset($_SESSION['login_user'])) {
					echo "<li id='loginLink'><a href='../login/logout.php'>Logout</a></li>";
				} else {
					echo "<li id='loginLink'><a href='../login'>Login</a></li>";
				}
			?>
		</ul>
	</div>
</nav>
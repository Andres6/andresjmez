<?php
	include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
	</head>

	<body>
		<h1><?php echo $_SESSION['login_user']; ?></h1>
		<h2><a href = "logout.php">Sign out</a></h2>
	</body>
</html>
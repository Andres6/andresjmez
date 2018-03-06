<?php
	session_start();
	include('config.php');

	$user_check = $_SESSION['login_user'];

	$sess_sql = mysqli_query($db, "SELECT username FROM user WHERE username = '$user_check'");

	$row = mysqli_fetch_array($sess_sql, MYSQLI_ASSOC);

	$login_session = $row['username'];

	if (!isset($_SESSION['login_user'])) {
		header("Location: index.php");
	}
?>
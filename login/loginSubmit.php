<?php
	include('config.php');
	session_start();


	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//initialize variables
		$error = "";
		$myUsername = $myPassword = "";
		$usernameErr = $passwordErr = "";

		//Check for empty inputs and trim white spaces
		if (empty(trim($_POST['username']))){
			$usernameErr = "Please enter a username.";
		} else {
			$myUsername = trim($_POST['username']);
		}

		if (empty(trim($_POST['password']))){
			$passwordErr = "Please enter a username.";
		} else {
			$myPassword = trim($_POST['password']);
		}

		//escapes special characters for use in SQL
		$myUsername = mysqli_real_escape_string($db, $myUsername);
		$myPassword = mysqli_real_escape_string($db, $myPassword);


		$sqlQuery = "SELECT id FROM user WHERE username = '$myUsername' AND password = '$myPassword'";
		$result = mysqli_query($db, $sqlQuery);	
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);		
		$active = $row['active'];

		//get the number of rows in the result set
		$count = mysqli_num_rows($result);
		//$_SESSION['rowCount'] = $count;

		//if query result matched table row count must be 1, otherwise credentials were incorrect
		if ($count == 1) {
			$_SESSION['login_user'] = $myUsername;
			header('Location: ../projects/index.php');
		} else {
			$_SESSION['login_error'] = "invalid credentials";
			header('Location: index.php');
			exit();
		}

		mysqli_close($db);
	}

?>

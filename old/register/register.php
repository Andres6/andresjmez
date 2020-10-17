<?php
	//start session and include database config
	session_start();
	require_once 'config.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$regUsername = trim($_POST['username']);
		$regPass = trim($_POST['password']);
		$regConfirmPass = trim($_POST['confirm_password']);
		$regEmail = trim($_POST['email']);

		//check for empty values submitted in the form
		if (!empty($regUsername) && !empty($regEmail) && !empty($regPass) && !empty($regConfirmPass)) {

			//check for matching passowords first before making calls to database
			if ($_POST['password'] == $_POST['confirm_password']){

				// if ($mysqli -> connect_errno) {
				// 	$_SESSION['message'] = "can't connect to database";
				// } else {
				// 	$_SESSION['message'] = "connection success";
				// }

				//escapes special characters for use in SQL queries, helps with sql injections
				$regUsername = mysqli_real_escape_string($db, $regUsername);
				$regEmail = mysqli_real_escape_string($db, $regEmail);
				$regPass = mysqli_real_escape_string($db, $regPass);
				$regConfirmPass = mysqli_real_escape_string($db, $regConfirmPass);

				$userCheckQuery = "SELECT username FROM user WHERE username = '$regUsername'";

				//echo $userCheckQuery;

				//query database for entered user
				if ($resultSet = $db -> query($userCheckQuery)) {
					$row = $resultSet -> fetch_assoc();
					$dbUsername = $row["username"];
					$resultSet -> close();
				} else {
					$_SESSION['message'] = 'Cannot query the database';
					header("Location: index.php");
				}

				//check if entered user already extists
				if (empty($dbUsername)) {
					
					$insertQuery = "INSERT INTO user (username, email, password) VALUES ('$regUsername', '$regEmail', '$regPass')";

					//try to register user to the database and log them in
					if ($db -> query($insertQuery)) {
						$_SESSION['login_user'] = $regUsername;
						header('Location: ../profile/index.php');
					}
					else {
						$_SESSION['login_user'] = "database insert did not work";
						header("Location: index.php");
					}

				} else {
					$_SESSION['message'] = 'Username already exists';
					header("Location: index.php");
				}

			} else {
				$_SESSION['message'] = 'The passwords do not match';
				header("Location: index.php");
			}

		} else {
			$_SESSION['message'] = 'Please enter in all fields before submitting';
			//echo "error here";
			header("Location: index.php");
		}

	}

?>
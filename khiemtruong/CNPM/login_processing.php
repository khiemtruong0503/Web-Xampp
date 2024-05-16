<?php
	session_start();

	require_once "input.php";
	require_once "login.php";
	
	$connection = new mysqli($serverName, $username, $password, $databaseName);
	if($connection->connect_error){
		die("Connection failed: " . $connection->connect_error);
	}

	$sql = "SELECT * FROM users WHERE username = '$userName'";
	$select = $connection->query($sql);
	$row = mysqli_fetch_array($select);
	
	if(is_array($row)){
		$hashedPW = $row['password'];
		if(password_verify($userPassword, $hashedPW)){
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
		}else echo "Password is invalid.";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "alert('Invalid username or password')";
		echo "</script>";
		die();
	}

	if(isset($_SESSION['username'])){
		setcookie('user', $_SESSION['username'], time() + 24 * 60 * 60);
		header("Location: login_successfully.php");
	}else die("No username found.");
?>
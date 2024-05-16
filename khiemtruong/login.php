<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is login page</title>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body>
	<?php include_once "header.php"; ?>
	<?php include_once "top-nav.php"; ?>
	<?php include_once "createDB.php" ?>
	<?php
		// session_start();

		// if the form is submitted
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$userName = "";
			$userPassword = "";
			$errorMessage = "";
			if(isset($_POST["login"])){
				$userName = $_POST["username"];
				$userPassword = $_POST["password"];
			}

		}

	?>
	<section class="login-interface center">

		<form method="POST" action="/login_processing.php">
			<div class="center">
				<div class="img_user">
					<img src="icon_user.png">
				</div>
				<div class="inputLogin-email">
					<input type="email" name="username" placeholder="Email" required>
				</div>
				<div class="inputLogin-password">
					<input type="password" name = "password" placeholder="Password" required>
				</div>
				
				<div>
					<button type="submit" name = "login" value="Login">LOGIN</button>
				</div>
			</div>
		</form>
	</section> 



	<?php include_once "footer.php"; ?>
</body>
</html>
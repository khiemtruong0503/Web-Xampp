<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<?php 
		include_once "header.php";

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$userName = "";
			$userPassword = "";
			if(isset($_POST['login'])){
				$userName = $_POST['username'];
				$userPassword = $_POST['password'];
			}
		}
	?>
	<div class="wrapper">
		<div class="form-box login">
			<h2>Login</h2>
			<form method="POST" action="/cnpm/login_processing.php">
				<div class="input-box">
					<span class="icon"></span>
					<input type="email" name="username" required>
					<label>Email</label>
				</div>

				<div class="input-box">
					<span class="icon"></span>
					<input type="password" name="password" required>
					<label>Password</label>
				</div>

				<div class="remember-forgot">
					<label><input type="checkbox">Remember me</label>
					<a href="#">Forgot Password?</a>
				</div>
				<button type="submit" name="login" class="btn">Login</button>
				<div class="login-register">
					<p>Don't have an account?
						<a href="#" class="register-link"> Register</a>
					</p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
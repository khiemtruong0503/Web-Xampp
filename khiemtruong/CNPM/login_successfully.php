<?php
	session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Successfully</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<?php 
		include_once "header.php";
	?>
	<section class="login-interface center">
		<div>
			</br>
			<div class="img_user">
				<img src="icon_user.png">
			</div>
			<b>Welcome </b>
			</br>
			<b><?php echo $_SESSION['username'];?></b>
			</br>
			</br>
			<b>Click here to </b>
			<a href="/cnpm/logout.php">
				<?php
					if(isset($_SESSION['username'])){
						echo "logout";
					}
				?>
			</a>
		</div>
	</form>
	</section> 
</body>
</html>
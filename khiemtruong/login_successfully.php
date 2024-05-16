<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login successfully</title>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body>
	<?php include_once "header.php"; ?>
	
	<div class="top-nav clearfix">
		<section class="center">
			<div class="home-button">
				<form method="GET" action="/home.php">
					<button type="submit">Home</button>
				</form>
			</div>
			<div class="products-button">
				<form action="/products.php?">
					<button type="submit">Products</button>
				</form>
			</div>
		</section>
	</div>


	<?php include_once "createDB.php" ?>
	<section class="login-interface center">
		<div>
			</br>
			<div class="img_user">
				<img src="icon_user.png">
			</div>
			<b>Welcome </b>
			</br>
			<b><?php echo $_SESSION['Username'];?></b>
			</br>
			</br>
			<b>Click here to </b>
			<a href="/logout.php">
				<?php
					if(isset($_SESSION['Username'])){
						echo "logout";
					}
				?>
			</a>
		</div>
	</form>
	</section> 
</body>
</html>
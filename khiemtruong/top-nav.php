<?php
if(!isset($_SESSION)){
	session_start();
}
?>
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
		<div class="login-button">
			<form action="/login.php">
				<button type="submit" style=
				<?php 
					if(isset($_SESSION['Username'])){
						echo "'display:none'";
					}
					else echo "''";
				?>
				>Login</button>
			</form>
		</div>
		<div class="register-button">
			<form action="/register.php">
				<button type="submit" style =
				<?php 
					if(isset($_SESSION['Username'])){
						echo "'display:none'";
					}
					else echo "''";
				?>
				>Register</button>
			</form>
		</div>
	</section>
</div>

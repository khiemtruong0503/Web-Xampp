<?php
require_once "input.php";
if(!isset($_SESSION)){
	session_start();
}
// $connection = mysqli_connect($serverName, $username, $password, $databaseName) or die("Conection failed: " . $connection->connect_error());
?>
<style>
	header{
		width: 100%;
		height: 50px;
		background-color: orange;
	}
	header .header-search{
		width: 45%;
	}
	header .header-search input{
		width: 60%;
		padding: 7px 7px 7px 28px;
		background: #fff url(icon_search.png) no-repeat;
		border-radius: 15px 5px 5px 15px;
		margin-left: 50px;
	}
	header .header-search button{
		padding: 7px 15px;
		background-color: #ff6b00;
		color: #fff;
	}
	.header-logo, .header-search{
		float: left;
		line-height: 50px;
	}
	header section .header-userLogo{
		display: inline-block;
		width: 32px;
		height: 32px;
		float: right;
	}
	header section .header-username{
		float: right;
		color: #fff;
	}
</style>
<header>
	<section class="clearfix">
		<div class="header-logo">
			<img src="logo.png">
		</div>
		<form action="products.php">
			<div class="header-search">
				<input name="input-headerSearch" type="search" placeholder=" Search something..." height=>
				<button>Search</button>
			</div>
		</form>
		<div class="header-userLogo">
			<?php
				if(isset($_SESSION['Username'])){
					echo '<img src="icon_userHeader.png">';
				}
			?>
		</div>
		<div class="header-username">
			<?php 
				if(isset($_SESSION['Username'])){
					echo $_SESSION['Username'];
				}
		 	?>
		 	<a href="logout.php">
				<?php
					if(isset($_SESSION['Username'])){
						echo "logout";
					}
				?>
			</a>
		</div>
		
	</section>
</header>
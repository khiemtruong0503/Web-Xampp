<?php
	require_once "input.php";
?>
<style>
	.table-Products, .table-Users{
		border-collapse: collapse;
	}
	.table-header{
		border-collapse: collapse;
		background-color: #001c1c;
		color: white;
	}
	td{
		padding: 0 20px;
		border-bottom: 1px solid grey;
	}
	.center{
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		-ms -transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}
	.featured-tables{
		text-align: center;
		height: 50%;
	}
</style>

<?php

	// bước kết nối với database
	$connection = new mysqli($serverName, $username, $password, $databaseName);
	if($connection->connect_error){
		die("Connection failed: " . $connection->connect_error);
	}

	// lấy data từ bảng products từ phpmyadmin
	$sql = "SELECT * FROM products";
	$result = $connection->query($sql);
	
	if($result->num_rows > 0){
		// $productsTable = $result->fetch_assoc();
	}
	else{
		die("0 results");
	}
?>
<!-- display table Products -->
<?php
	$sql = "SELECT * FROM `products`";
	$result = $connection->query($sql);

	$num_per_page = 05;
	if(isset($_GET["product-page"])){
		$page = $_GET["product-page"];
	}
	else{
		$page = 1;
	}
	$page = (int)$page;
	$start_from = ($page - 1) * 05;
	$sql = "SELECT * FROM `products` LIMIT  $start_from, $num_per_page";
	$result = $connection->query($sql);
?>
<div class="featured-tables center">
	<table class="table-Products">
		<tr class="table-header">
			<?php
				foreach($inputProducts['columns'] as $columnName){
					echo "<th>" . $columnName . "</th>";
				}
			?>		
		</tr>
		<?php
			while($product = mysqli_fetch_assoc($result)){
				echo "<tr>";

				echo "<td>";	
				echo $product['productID'];
				echo "</td>";

				echo "<td>";
				echo $product['productName'];
				echo "</td>";

				echo "<td>";
				echo $product['prices'];
				echo "</td>";

				echo "</tr>";
			}

			
			$sql = "SELECT * FROM `products`";
			$result = $connection->query($sql);
			$total_records = mysqli_num_rows($result);
			$total_pages = ceil($total_records / $num_per_page);
			
			for($i = 1; $i <= $total_pages; $i++){
				// echo "<a href='index.php?page=products/product-page=". $i . "'>" . $i . "</a>";
				echo "<a href='products?product-page='>" . $i . "</a>";

			}
		?>
	</table>

	</br>
	<?php 
		// lấy data từ bảng users từ phpmyadmin
		$sql = "SELECT * FROM users";
		$result = $connection->query($sql);

		if($result->num_rows > 0){
		} 
		else{
			die("0 results");
		}
	?>
	<!-- <table class="table-Users">
		<tr class="table-header">
			<?php
				foreach($inputUsers['columns'] as $columnName){
					echo "<th>" . $columnName . "</th>";
				}
			?>
		</tr>
		<?php
			while($product = mysqli_fetch_assoc($result)){
				echo "<tr>";

				echo "<td>";
				echo $product['userID'];
				echo "</td>";

				echo "<td>";
				echo $product['username'];
				echo "</td>";

				echo "<td>";
				echo $product['password'];
				echo "</td>";

				echo "</tr>";
			}
		?>
	</table> -->

</div>
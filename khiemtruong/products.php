<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is products page</title>
	<link rel="stylesheet" href="mystyle.css?v=<?php echo time(); ?>">
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
		}
	</style>
</head>
<body>
	<?php include_once "header.php"; ?>
	<?php include_once "top-nav.php"; ?>
	<?php include_once "createDB.php"; ?>
	<?php include_once "input.php"; ?>
	<button class="dropbtn">Dropdown</button>
	<?php 
		if(isset($_GET['input-headerSearch'])){
			$sql = "SELECT * FROM products WHERE productName LIKE " . "'%" . $_GET['input-headerSearch'] . "%';" ;

			

			$get = $connection->query($sql);
			if($get->num_rows == 0){
				echo "<script type='text/javascript'>";
				echo "alert('No products found.')";
				echo "</script>";
				die();
			}
			echo "<div class=" . "'featured-tables center'" . ">";
			echo "<table class=" . "'table-Products'" . ">";
			echo "<tr class=" . "'table-header'" . ">";
			foreach($inputProducts['columns'] as $columnName){
				echo "<th>" . $columnName . "</th>";
			}	
			echo "</tr>";
		
			while($product = mysqli_fetch_assoc($get)){
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
		
			echo "</table>";
			echo "</div>";
		}else include_once "tables.php" ?>
	
</body>
</html>
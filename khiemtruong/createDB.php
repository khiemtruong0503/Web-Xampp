<?php
// INPUT
require_once "input.php";

//$serverName = "localhost";
//$username = "root";
//$password = "";

// CREATE CONNECTION
// create a connection to your SQL server: 
$connection = new mysqli($serverName, $username, $password);

if($connection->connect_error){
	die("Connection failed: " . $connection->connect_error);
}

// CREATE DATA BASE 
// create a new database named "OnlineStore"
//$databaseName = "OnlineStore";

// delete data base if already exists
$sql = "DROP DATABASE IF EXISTS $databaseName";
$connection->query($sql);

$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";

if($connection->query($sql) == TRUE){
	// echo $databaseName . " successfully created";
}
else{
	die("Error creating database $databaseName: " . $connection->connect_error);
}

$connection = new mysqli($serverName, $username, $password, $databaseName);

// CREATE TABLE

$sql = "CREATE TABLE IF NOT EXISTS " . $inputProducts['name'] . "(
	productID INT AUTO_INCREMENT PRIMARY KEY,
	productName VARCHAR(255) NOT NULL,
	prices DECIMAL(10, 2) NOT NULL
)";

if($connection->query($sql) == TRUE){
	// echo "</br>";
	// echo "successfully added table " . $tableProducts['name'];
}
else{
	echo "</br>";
	echo "error adding table " . $inputProducts['name'];
}


$sql = "CREATE TABLE IF NOT EXISTS " . $inputUsers['name'] . "(
	userID INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
)";

if($connection->query($sql) == TRUE){
	// echo "</br>";
	// echo "successfully added table " . $tableUsers['name'];
}
else{
	echo "error adding table " . $tableUsers['name'];
}



// INSERT PART
// insert into products table
insertIntoTable($inputProducts, $connection, $inputProducts['productList']);
function insertIntoTable($table, $conn, $productList){
	foreach($productList as $item){
		$sql = "INSERT INTO " . $table['name'] . "(";
		
		foreach($table['columns']  as $column){
			$sql .= $column . ', ';
		}

		// trim the excess comma and space 
		$sql = rtrim($sql, ', ');
		$sql .= ") VALUES (null, '";
		foreach($item as $key => $value){
			if($key == 'password'){
				$hashed_password = password_hash($value, PASSWORD_DEFAULT);
				$sql .= $hashed_password . "', '"; 
			}
			else {
				$sql .= $value . "', '";
			}
		}

		// detlete excess comma and the quote sign
		$sql = rtrim($sql, "'");
		$sql = rtrim($sql, ', ');

		$sql .= ')';

		$conn->query($sql);
	}
}

// insert into users table
insertIntoTable($inputUsers, $connection, $inputUsers['users']);
// $hashed_password = password_hash($psswrd, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (userID, username, password) VALUES ('null', '$user', '$hashed_password')";

// if($connection->query($sql) == TRUE){
// 	echo "</br>";
// 	echo "successfully added $user into " . $table['name'];
// }


// PRINT OUT DATA
// printTable($tableProducts['name'], $connection);
// printTable($tableUsers['name'], $connection);


function printTable($tblName, $conn){
	$sql = "SHOW TABLES LIKE '$tblName'";
	$res = $conn->query($sql);

	if($res->num_rows > 0){
		echo "<pre>";
		$sql = "SELECT * FROM $tblName";
		$res = $conn->query($sql);
		$res1 = $res->fetch_assoc();
		echo var_dump($res1);
	}
}
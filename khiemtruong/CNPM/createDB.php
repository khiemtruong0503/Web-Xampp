<?php
	require_once "input.php";


	// CREATE CONNECTION 
	$connection = new mysqli($serverName, $username, $password);

	if($connection->connect_error){
		die("Connection failed: " . $connection->connect_error);
	}

	$sql = "DROP DATABASE IF EXISTS $databaseName";
	$connection->query($sql);

	$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";
	if($connection->query($sql) == FALSE){
		die("Cannot create database $databaseName");
	}

	$connection = new mysqli($serverName, $username, $password, $databaseName);
	if($connection->connect_error){
		die("Connection failed: " . $connection->connect_error);
	}

	// CREATE TABLE `users`
	
	$sql = "CREATE TABLE IF NOT EXISTS " . $tableUsers['name'] . "(
		userID INT AUTO_INCREMENT PRIMARY KEY, 
		username varchar(255) NOT NULL, 
		password varchar(255) NOT NULL
	)";

	if($connection->query($sql) == FALSE){
		die("Error creating table " . $tableUsers['name'] . ": " . $connection->connect_error);
	}

	function insertIntoTable($connection, $table, $List){
		foreach($List as $item){
			$sql = "INSERT INTO " . $table['name'] . "(";

			foreach($table['columns'] as $column){
				$sql .= $column . ', ';
			}

			// trim the excess comma and space 
			$sql = rtrim($sql, ', ');
			$sql .= ") " . "VALUES" . " (null, '";
			foreach($item as $key => $value){
				if($key == 'password'){
					$hashed_password = password_hash($value, PASSWORD_DEFAULT);
					$sql .= $hashed_password . "', '";
				}
				else{
					$sql .= $value . "', '";
				}
			} 

			// delete excess comma and quote sign
			$sql = rtrim($sql, "'");
			$sql = rtrim($sql, ', ');
			$sql .= ")";

			$connection->query($sql);
		}
	}

	insertIntoTable($connection, $tableUsers, $tableUsers['users']);
?>
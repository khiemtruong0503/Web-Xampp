<?php

	$serverName = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "Printing_Service";

	// table Users
	$user1 = 	[
				'name' => 'admin@gmail.com', 
				'password' => 'admin'
				];
	$user2 = 	[
				'name' => 'guest@gmail.com',
				'password' => 'guest'
				];
	$tableUsers =	[
		'name' => 'users',
		'columns' => ['userID', 'username', 'password'],
		'users' => [$user1, $user2]
				  	];
?>
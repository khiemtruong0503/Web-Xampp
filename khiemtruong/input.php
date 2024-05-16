<?php
// table Products
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "OnlineStore";

$inputProducts = [
	'name' => 'Products',
	'columns' => ['productID', 'productName', 'prices'],
	'productList' => []
];
// Function to generate a random string for product names
function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}

// generate 50 products with name includes 'shoes'
for ($i = 1; $i <= 15; $i++) {
    $productName = generateRandomString(8) . ' ' . generateRandomString(6) . ' shoes'; // Combine random strings for an outfit-like name
    $productPrice = number_format(rand(20, 150) + rand(0, 99) / 100, 2); // Random price between 20 and 150

    $outfitProducts = [
        'name' => $productName,
        'prices' => $productPrice
    ];
    array_push($inputProducts['productList'], $outfitProducts);
}

// generate 50 products with name includes 'hats'
for ($i = 1; $i <= 15; $i++) {
    $productName = generateRandomString(8) . ' ' . generateRandomString(6) . ' hats'; // Combine random strings for an outfit-like name
    $productPrice = number_format(rand(20, 150) + rand(0, 99) / 100, 2); // Random price between 20 and 150

    $outfitProducts = [
        'name' => $productName,
        'prices' => $productPrice
    ];
    array_push($inputProducts['productList'], $outfitProducts);
}

// generate 50 products with name includes 'clothes'
for ($i = 1; $i <= 15; $i++) {
    $productName = generateRandomString(8) . ' ' . generateRandomString(6) . ' clothes'; // Combine random strings for an outfit-like name
    $productPrice = number_format(rand(20, 150) + rand(0, 99) / 100, 2); // Random price between 20 and 150

    $outfitProducts = [
        'name' => $productName,
        'prices' => $productPrice
    ];
    array_push($inputProducts['productList'], $outfitProducts);
}







// $prod1 = [
// 	'name'	 => 'shoes',
// 	'prices' => 10
// ];

// $prod2 = [
// 	'name' 		=> 'clothes',
// 	'prices' 	=> 20
// ];

// $prod3 = [
// 	'name' 		=> 'hats',
// 	'prices' 	=> 15
// ];

// $inputProducts = [
// 	'name' => 'Products',
// 	'columns' => ['productID', 'productName', 'prices'],
// 	'productList' => [$prod1, $prod2, $prod3]
// ];

// table Users
$user1 = [
	'username' 	=> 'admin@gmail.com',
	'password' 	=> 'admin'
];

$user2 = [
	'username' 	=> 'guest@gmail.com',
	'password' 	=> 'guest'
];

// $user3 = [
// 	'username' 	=> 'Cao Nhut C',
// 	'password' 	=> 'abc123456'
// ];

$inputUsers = [
	'name' => 'Users',
	'columns' => ['userID', 'username', 'password'],
	'users' => [$user1, $user2]
];

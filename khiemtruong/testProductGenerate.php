<?php
// Function to generate a random string for product names
function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}

// Generate an array of 200 fashion products with names and prices
$fashionProducts = [];

for ($i = 1; $i <= 200; $i++) {
    $productName = generateRandomString(10) . ' ' . generateRandomString(5) . ' ' . 'Fashion'; // Combine random strings for a fashion-like name
    $productPrice = number_format(rand(10, 200) + rand(0, 99) / 100, 2); // Random price between 10 and 200

    $fashionProducts[] = [
        'id' => $i,
        'name' => $productName,
        'price' => $productPrice,
    ];
}

// Output the generated fashion products as JSON (optional)
header('Content-Type: application/json');
echo json_encode($fashionProducts, JSON_PRETTY_PRINT);
?>

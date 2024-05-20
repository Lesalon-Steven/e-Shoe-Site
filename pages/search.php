<?php
// Database connection (update with your own credentials)
$host = 'localhost';
$dbname = 'UserDB';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Get the query parameter from URL
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE :query");
$stmt->execute(['query' => '%' . $query . '%']);

// Fetch the results as an associative array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output the results as HTML
foreach ($products as $product) {
    echo '<div class="bg-white rounded-lg shadow-md overflow-hidden">';
    echo '<img src="../assets/' . htmlspecialchars($product['image']) . '" alt="Product Image" class="w-full h-64 object-cover">';
    echo '<div class="p-4">';
    echo '<h3 class="text-xl font-semibold mb-2">' . htmlspecialchars($product['name']) . '</h3>';
    echo '<p class="text-gray-700">$' . htmlspecialchars($product['price']) . '</p>';
    echo '<button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>';
    echo '</div>';
    echo '</div>';
}
?>

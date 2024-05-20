<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UserDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ?");
$searchTerm = "%" . $query . "%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Generate HTML for the matching products
while ($row = $result->fetch_assoc()) {
    echo '<div class="bg-white rounded-lg shadow-md overflow-hidden">';
    echo '<img src="../assets/' . htmlspecialchars($row['image']) . '" alt="Product Image" class="w-full h-64 object-cover">';
    echo '<div class="p-4">';
    echo '<h3 class="text-xl font-semibold mb-2">' . htmlspecialchars($row['name']) . '</h3>';
    echo '<p class="text-gray-700">$' . htmlspecialchars($row['price']) . '</p>';
    echo '<button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>';
    echo '</div></div>';
}

// Close the connection
$conn->close();
?>

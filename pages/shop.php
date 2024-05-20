<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<!-- Search Input -->
<div class="container mx-auto my-8">
    <input type="text" id="search" placeholder="Search products..." class="w-full p-2 border rounded">
</div>

<!-- Showcase Products -->
<div class="container mx-auto my-8" id="productGrid">
    <h2 class="text-3xl font-semibold mb-6">Featured Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Static Product Cards (example) -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="../assets/sneaker3.jpeg" alt="Product Image" class="w-full h-64 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Adidas Campus 00s</h3>
                <p class="text-gray-700">$79.99</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="../assets/sneaker4.jpeg" alt="Product Image" class="w-full h-64 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">Nike Air Zoom Pegasus</h3>
                <p class="text-gray-700">$109.99</p>
                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
            </div>
        </div>
        <!-- More static product cards can be added here -->
    </div>
</div>

<script src="search.js"></script>
</body>
</html>

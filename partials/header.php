<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Website - Home</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="assets/validation.js" defer></script>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-gray-800 py-6">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="text-white text-2xl font-semibold">Shoe Website</div>
            <ul class="flex space-x-6 text-white">
            <?php
            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
                // Display a greeting with the username
                echo '<li><span class="mr-4 text-gray-300">Hi, ' . htmlspecialchars($_SESSION['username']) . '</span></li>';
                // Display the logout button
                echo '<li><a href="index.php?page=logout" class="hover:text-gray-300">Logout</a></li>';
            } else {
                // User is not logged in, display the "Login" button
                echo '<li><a href="index.php?page=login" class="hover:text-gray-300">Login</a></li>';
            }
            ?>
                <li><a href="index.php" class="hover:text-gray-300">Home</a></li>
                <li><a href="index.php?page=shop" class="hover:text-gray-300">Shop</a></li>
                <li><a href="index.php?page=about" class="hover:text-gray-300">About</a></li>
                <li><a href="index.php?page=contact" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>

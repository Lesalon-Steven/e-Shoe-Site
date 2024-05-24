<?php
// Start session
session_start();

// Database connection configuration
$servername = "localhost"; // Change this if your database server is different
$username = "root"; // Your MySQL root username
$password = ""; // Your MySQL root password, if you have set one
$dbname = "UserDB"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error variable
$error = "";

// If form data is provided
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["loginUsername"];
    $password = $_POST["loginPassword"];

    // Verify credentials
    $sql = "SELECT id FROM userdata WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header("Location: index.php?page=loggedin");
        exit();
    } else {
        // Authentication failed
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">
        <h2 class="text-2xl font-semibold mb-6">Login</h2>
        
        <!-- Display error message if there is one -->
        <?php if ($error): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline"><?php echo $error; ?></span>
            </div>
        <?php endif; ?>

        <!-- Button to go back to login page -->
        <div class="flex justify-center">
            <a href="login.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Back to Login
            </a>
        </div>
    </div>
</body>
</html>

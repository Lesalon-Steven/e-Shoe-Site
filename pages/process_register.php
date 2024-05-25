<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Data</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .modal {
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
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

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["registerUsername"];
    $password = $_POST["registerPassword"];
    $firstname = $_POST["registerFirstname"];
    $lastname = $_POST["registerLastname"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO userdata (username, firstname, lastname, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $firstname, $lastname, $password);

    // Execute the statement
    if ($stmt->execute()) {
        // Close statement and connection
        $stmt->close();
        $conn->close();

        // Display the styled modal and handle redirection
        echo '
        <div id="successModal" class="modal">
            <div class="modal-content">
                <p class="text-2xl font-semibold mb-4">Registration Successful!</p>
                <p class="mb-4">You will be redirected to the login page shortly.</p>
                <button id="redirectButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Go to Login</button>
            </div>
        </div>
        <script>
            document.getElementById("redirectButton").addEventListener("click", function() {
                window.location.href = "index.php?page=login";
            });

            // Automatically redirect after 3 seconds
            setTimeout(function() {
                window.location.href = "index.php?page=login";
            }, 3000);
        </script>';
    } else {
        echo "Error: " . $stmt->error;
        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>

</body>
</html>

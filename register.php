<?php
session_start();

// Check if the user is already logged in, redirect to home page if logged in
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// Database connection
$dbh = new PDO('mysql:host=localhost;dbname=UserDB', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Handle registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    // Check if username already exists
    $sqlSelect = "SELECT id FROM users WHERE username = :username";
    $stmt = $dbh->prepare($sqlSelect);
    $stmt->execute(array(':username' => $username));
    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        $error = "Username already exists.";
    } else {
        // Insert new user into database
        $sqlInsert = "INSERT INTO users (username, password, firstname, lastname) VALUES (:username, :password, :firstname, :lastname)";
        $stmt = $dbh->prepare($sqlInsert);
        $stmt->execute(array(':username' => $username, ':password' => $password, ':firstname' => $firstname, ':lastname' => $lastname));
        $success = "Registration successful. You can now login.";
    }
}

// Close database connection
$dbh = null;
?>

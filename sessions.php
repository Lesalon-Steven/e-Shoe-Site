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

// Handle login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password match
    $sqlSelect = "SELECT id FROM users WHERE username = :username AND password = :password";
    $stmt = $dbh->prepare($sqlSelect);
    $stmt->execute(array(':username' => $username, ':password' => $password));
    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        // Login successful, set session variables and redirect to home page
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}

// Handle logout
if (isset($_GET["logout"])) {
    // Unset all session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Redirect to login page
    header("Location: login.php");
    exit;
}
?>

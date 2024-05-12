

<?php
echo "Thank you for your message! We will get back to you soon.";
?>




<!-- 
// session_start();

// // Check if the user is already logged in, redirect to home page if logged in
// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
//     exit;
// }


// Database connection
// $dbh = new PDO('mysql:host=localhost;dbname=UserDB', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// // Handle login
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     // Check if username and password match
//     $sqlSelect = "SELECT id FROM users WHERE username = :username AND password = :password";
//     $stmt = $dbh->prepare($sqlSelect);
//     $stmt->execute(array(':username' => $username, ':password' => $password));
//     if ($stmt->fetch(PDO::FETCH_ASSOC)) {
//         // Login successful, set session variables and redirect to home page
//         $_SESSION['username'] = $username;
//         header("Location: index.php");
//         exit;
//     } else {
//         $error = "Invalid username or password.";
//     }
// }

// // Close database connection
// $dbh = null;
?> -->

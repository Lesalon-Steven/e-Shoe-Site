
<?php
// Include configuration file
$config = include('config.php');

// Get requested page from URL query parameter, default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Include the header
include('partials/header.php');

// Check if the requested page exists in the configuration
if (array_key_exists($page, $config)) {
    // Include the requested page
    include($config[$page]);
} else {
    // Page not found, redirect to 404 or display an error message
    // For example:
    header("HTTP/1.0 404 Not Found");
    echo "Page not found!";
}

// Include the footer
include('partials/footer.php');
?>

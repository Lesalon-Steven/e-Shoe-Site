<?php
// Include configuration file
$config = include('config.php');

// Get requested page from URL query parameter, default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Check if the requested page exists in the configuration
if (array_key_exists($page, $config)) {
    include('partials/header.php');
    
    // Include the requested page
    include($config[$page]);
    
    // Include the footer
    include('partials/footer.php');
} elseif ($page == 'login') {
    // Handle login page separately if not defined in the config
    include('pages/login.php');
} elseif ($page == 'search') {
    // Include search page
    include('pages/search.php');
} else {
    // Page not found, display a 404 error
    header("HTTP/1.0 404 Not Found");
    echo "Page not found!";
}
?>

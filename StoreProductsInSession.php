<?php
require 'sec.php';
session_start();
// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect to login page with an error message
    header("Location: http://localhost/all/project/ecommerce/login.php?error=Login+First");
    die();
}

// Function to find the next available session key  
function findNextSessionKey() {
    $index = 1;
    while (isset($_SESSION['p_' . $index]) && ($_SESSION['p_' . $index] !== null) && ($_SESSION['p_' . $index] !== '')) {
        $index++;
    }
    return 'p_' . $index;
}

if (isset($_GET['url']) && !empty($_GET['url'])) {
    $key = findNextSessionKey();
    echo "Success\n" . $_GET['url'];
    $_SESSION[$key] = $_GET['url'];
    require 'orders/total_price.php';
} 

if (isset($_POST['action']) && $_POST['action'] == 'remove' && isset($_POST['sessionKey']) && !empty($_POST['sessionKey'])) {
    $key = $_POST['sessionKey'];
    // Unset the specific session key
    unset($_SESSION[$key]);
    echo "Success\nSession Key : " . $key . " Deleted";
    require 'orders/total_price.php';
} 
else {
    echo "Error: Invalid request.";
}

?>
<?php
// Allowed values
$allowed_domains = ['localhost', '127.0.0.1'];
$allowed_methods = ['POST'];
$allowed_headers = ['Host'];//, 'X-Forwarded-Host', 'X-Host','X-Original-URL','X-Forwarded-Server','X-Forwarded-For','Forwarded','Client-IP'];

// Check Host header
if (!isset($_SERVER['HTTP_HOST']) || !in_array($_SERVER['HTTP_HOST'], $allowed_domains)) {
    header('HTTP/1.1 403 Forbidden');
    die('Invalid Host header');
}

// Check Origin header
if (isset($_SERVER['HTTP_ORIGIN'])){
    @$origin = $_SERVER['HTTP_ORIGIN'];
    $parsed_origin = parse_url($origin);
    // Extract the host
    $origin = isset($parsed_origin['host']) ? $parsed_origin['host'] : '';
    if(!in_array($origin, $allowed_domains)){
        header('HTTP/1.1 403 Forbidden');
        die('Invalid Origin header');
    }
}

// Check Referer header
if (isset($_SERVER['HTTP_REFERER']) && !in_array(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST), $allowed_domains)) {
    header('HTTP/1.1 403 Forbidden');
    die('Invalid Referer header');
}

foreach ($allowed_headers as $header) {
    $header_value = isset($_SERVER['HTTP_' . strtoupper($header)]) ? $_SERVER['HTTP_' . strtoupper($header)] : '';
    if (!in_array($header_value, $allowed_domains) || $header_value =='' ) {
        header('HTTP/1.1 403 Forbidden');
        die('Invalid ' . $header . ' header');
    }
}

header('Access-Control-Allow-Origin: ' . implode(', ', $allowed_domains));
header('Access-Control-Allow-Methods: ' . implode(', ', $allowed_methods));
header('Access-Control-Allow-Headers: ' . implode(', ', $allowed_headers));
header('Access-Control-Allow-Credentials: true');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    die('Invalid Request Method');
}

// Check if search parameter is set
if(isset($_POST['search'])) {
    // Retrieve and sanitize the search parameter
    $s = strip_tags($_POST['search']);
    $s = urldecode($s);
    $s = strtolower($s);
    $s = htmlspecialchars($s);
    // Create a map of search terms to database and table names
    $searchMap = array(
        'women_pant' => array('database' => 'women', 'table' => 'pants'),
        'women_pants' => array('database' => 'women', 'table' => 'pants'),
        'women_pantalon' => array('database' => 'women', 'table' => 'pants'),
        'women_pantalons' => array('database' => 'women', 'table' => 'pants'),
        'women_tshirt' => array('database' => 'women', 'table' => 't_shirts'),
        'women_t_shirt' => array('database' => 'women', 'table' => 't_shirts'),
        'women_tshirts' => array('database' => 'women', 'table' => 't_shirts'),
        'women_t_shirts' => array('database' => 'women', 'table' => 't_shirts'),
        'women_shirt' => array('database' => 'women', 'table' => 'shirts'),
        'women_shirts' => array('database' => 'women', 'table' => 'shirts'),
        'women_jacket' => array('database' => 'women', 'table' => 'jackets'),
        'women_jackets' => array('database' => 'women', 'table' => 'jackets'),
        'women_shoe' => array('database' => 'women', 'table' => 'shoes'),
        'women_shoes' => array('database' => 'women', 'table' => 'shoes'),
        'men_pant' => array('database' => 'men', 'table' => 'pants'),
        'men_pants' => array('database' => 'men', 'table' => 'pants'),
        'men_pantalon' => array('database' => 'men', 'table' => 'pants'),
        'men_pantalons' => array('database' => 'men', 'table' => 'pants'),
        'men_tshirt' => array('database' => 'men', 'table' => 't_shirts'),
        'men_t_shirt' => array('database' => 'men', 'table' => 't_shirts'),
        'men_tshirts' => array('database' => 'men', 'table' => 't_shirts'),
        'men_t_shirts' => array('database' => 'men', 'table' => 't_shirts'),
        'men_shirt' => array('database' => 'men', 'table' => 'shirts'),
        'men_shirts' => array('database' => 'men', 'table' => 'shirts'),
        'men_jacket' => array('database' => 'men', 'table' => 'jackets'),
        'men_jackets' => array('database' => 'men', 'table' => 'jackets'),
        'men_shoe' => array('database' => 'men', 'table' => 'shoes'),
        'men_shoes' => array('database' => 'men', 'table' => 'shoes'),
        'children_pant' => array('database' => 'child', 'table' => 'pants'),
        'children_pants' => array('database' => 'child', 'table' => 'pants'),
        'children_pantalon' => array('database' => 'child', 'table' => 'pants'),
        'children_pantalons' => array('database' => 'child', 'table' => 'pants'),
        'children_tshirt' => array('database' => 'child', 'table' => 't_shirts'),
        'children_t_shirt' => array('database' => 'child', 'table' => 't_shirts'),
        'children_tshirts' => array('database' => 'child', 'table' => 't_shirts'),
        'children_t_shirts' => array('database' => 'child', 'table' => 't_shirts'),
        'children_shirt' => array('database' => 'child', 'table' => 'shirts'),
        'children_shirts' => array('database' => 'child', 'table' => 'shirts'),
        'children_jacket' => array('database' => 'child', 'table' => 'jackets'),
        'children_jackets' => array('database' => 'child', 'table' => 'jackets'),
        'children_shoe' => array('database' => 'child', 'table' => 'shoes'),
        'children_shoes' => array('database' => 'child', 'table' => 'shoes'),
        'child_pant' => array('database' => 'child', 'table' => 'pants'),
        'child_pants' => array('database' => 'child', 'table' => 'pants'),
        'child_pantalon' => array('database' => 'child', 'table' => 'pants'),
        'child_pantalons' => array('database' => 'child', 'table' => 'pants'),
        'child_tshirt' => array('database' => 'child', 'table' => 't_shirts'),
        'child_t_shirt' => array('database' => 'child', 'table' => 't_shirts'),
        'child_tshirts' => array('database' => 'child', 'table' => 't_shirts'),
        'child_t_shirts' => array('database' => 'child', 'table' => 't_shirts'),
        'child_shirt' => array('database' => 'child', 'table' => 'shirts'),
        'child_shirts' => array('database' => 'child', 'table' => 'shirts'),
        'child_jacket' => array('database' => 'child', 'table' => 'jackets'),
        'child_jackets' => array('database' => 'child', 'table' => 'jackets'),
        'child_shoe' => array('database' => 'child', 'table' => 'shoes'),
        'child_shoes' => array('database' => 'child', 'table' => 'shoes'),
        // Camera
        'camera' => array('database' => 'camera', 'table' => 'camera'),
        // Accessories
        'women_glass' => array('database' => 'accessories', 'table' => 'women_glasses'),
        'women_glasse' => array('database' => 'accessories', 'table' => 'women_glasses'),
        'women_glasses' => array('database' => 'accessories', 'table' => 'women_glasses'),
        'women_hand_bag' => array('database' => 'accessories', 'table' => 'women_hand_bag'),
        'women_hand_bags' => array('database' => 'accessories', 'table' => 'women_hand_bag'),
        'women_watch' => array('database' => 'accessories', 'table' => 'women_watches'),
        'women_watche' => array('database' => 'accessories', 'table' => 'women_watches'),
        'women_watchs' => array('database' => 'accessories', 'table' => 'women_watches'),
        'women_watches' => array('database' => 'accessories', 'table' => 'women_watches'),
        'men_watch' => array('database' => 'accessories', 'table' => 'men_watches'),
        'men_watche' => array('database' => 'accessories', 'table' => 'men_watches'),
        'men_watchs' => array('database' => 'accessories', 'table' => 'men_watches'),
        'men_watches' => array('database' => 'accessories', 'table' => 'men_watches'),
        'men_glass' => array('database' => 'accessories', 'table' => 'men_glasses'),
        'men_glasse' => array('database' => 'accessories', 'table' => 'men_glasses'),
        'men_glasses' => array('database' => 'accessories', 'table' => 'men_glasses'),
        'men_hand_bag' => array('database' => 'accessories', 'table' => 'men_hand_bag'),
        'men_hand_bags' => array('database' => 'accessories', 'table' => 'men_hand_bag'),
        // Laptops & Monitors
        'laptop' => array('database' => 'computers', 'table' => 'laptops'),
        'laptops' => array('database' => 'computers', 'table' => 'laptops'),
        'monitor' => array('database' => 'computers', 'table' => 'monitors'),
        'monitors' => array('database' => 'computers', 'table' => 'monitors'),
        // Furniture
        'alarm_watch' => array('database' => 'furniture', 'table' => 'alarm_watch'),
        'alarm_watche' => array('database' => 'furniture', 'table' => 'alarm_watch'),
        'alarm_watchs' => array('database' => 'furniture', 'table' => 'alarm_watch'),
        'alarm_watches' => array('database' => 'furniture', 'table' => 'alarm_watch'),
        'carpet' => array('database' => 'furniture', 'table' => 'carpets'),
        'carpets' => array('database' => 'furniture', 'table' => 'carpets'),
        'chair' => array('database' => 'furniture', 'table' => 'chairs'),
        'chairs' => array('database' => 'furniture', 'table' => 'chairs'),
        'table' => array('database' => 'furniture', 'table' => 'tables'),
        'tables' => array('database' => 'furniture', 'table' => 'tables'),
        'electric' => array('database' => 'furniture', 'table' => 'electric'),
        'fan' => array('database' => 'furniture', 'table' => 'fan'),
        'fans' => array('database' => 'furniture', 'table' => 'fan'),
        'roof_spotlight' => array('database' => 'furniture', 'table' => 'roof_spotlight'),
        'roof_spotlights' => array('database' => 'furniture', 'table' => 'roof_spotlight'),
        'floor_spotlight' => array('database' => 'furniture', 'table' => 'floor_spotlight'),
        'floor_spotlights' => array('database' => 'furniture', 'table' => 'floor_spotlight'),
        'table_spotlight' => array('database' => 'furniture', 'table' => 'table_spotlight'),
        'table_spotlights' => array('database' => 'furniture', 'table' => 'table_spotlight'),
        'wall_spotlight' => array('database' => 'furniture', 'table' => 'wall_spotlight'),
        'wall_spotlights' => array('database' => 'furniture', 'table' => 'wall_spotlight'),

        // Add more mappings as needed
    );
    
    

    // Determine the database and table names based on the search term
    $databaseName = '';
    $tableName = '';
    foreach($searchMap as $term => $info) {
        if(strpos($s, $term) !== false) {
            $databaseName = $info['database'];
            $tableName = $info['table'];
            break;
        }
    }

    // If database and table names are determined
    if(!empty($databaseName) && !empty($tableName)) {
        // Create a new MySQLi connection
        @$con = new mysqli("localhost", "root", "", $databaseName);

        // Check for connection error
        if($con->connect_error) {
            header('HTTP/1.1 500 Internal Server Error');
            die('Failed to connect to database');
        }

        // Prepare and execute parameterized query
        $stmt = $con->prepare("SELECT * FROM $tableName LIMIT 15");
        $stmt->execute();

        // Get the result set
        $stmt_result = $stmt->get_result();

        // Check if there are any matching rows
        if($stmt_result->num_rows > 0) {
            $products = array();
            while($data = $stmt_result->fetch_assoc()) {
                $products[] = $data;
            }
            // Convert the data to JSON
            $json_result = json_encode($products);
            // Set JSON content type header
            header('Content-Type: application/json');
            // Output the JSON data
            echo $json_result;
        } else {
            header('HTTP/1.1 404 Not Found');
            echo json_encode(array('message' => 'No products found matching the search'));
        }

        // Close the statement and database connection
        $stmt->close();
        $con->close();
    } else {
        header('HTTP/1.1 404 Not Found');
        echo json_encode(array('message' => 'Database or table not found for the given search term'));
    }
} else {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(array('message' => 'Search parameter is missing'));
}
?>

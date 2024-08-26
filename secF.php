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

/* // Check Referer header
if (isset($_SERVER['HTTP_REFERER']) && !in_array(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST), $allowed_domains)) {
    header('HTTP/1.1 403 Forbidden');
    die('Invalid Referer header');
} */

// Check other headers similar to Host
foreach ($allowed_headers as $header) {
    $header_value = isset($_SERVER['HTTP_' . strtoupper($header)]) ? $_SERVER['HTTP_' . strtoupper($header)] : '';
    if (!in_array($header_value, $allowed_domains) || $header_value =='' ) {
        header('HTTP/1.1 403 Forbidden');
        die('Invalid ' . $header . ' header');
    }
}

// Set CORS headers
header('Access-Control-Allow-Origin: ' . implode(', ', $allowed_domains));
header('Access-Control-Allow-Methods: ' . implode(', ', $allowed_methods));
header('Access-Control-Allow-Headers: ' . implode(', ', $allowed_headers));
header('Access-Control-Allow-Credentials: true');

?>
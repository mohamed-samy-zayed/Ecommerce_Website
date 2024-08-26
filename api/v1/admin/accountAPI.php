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

/* // Check Request Method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    die('Invalid Request Method');
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

session_start();
if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']) && isset($_SESSION['api_token']) && !empty($_SESSION['api_token']))
{
    // Getting Session Parameters 
    $uid = $_SESSION['admin_id'];
    $u_API_TOKEN = $_SESSION['api_token'];
    $uname = $_SESSION['admin_name'];
    $uemail = $_SESSION['email'];

    $con = new mysqli("localhost","root","","admins");
    if($con->connect_error)
    {
        header("HTTP/1.1 504 Intrnal Server Error");
    }

    // Check IF Api Token Is Allready Exsits IN Admins Database OR Not
    /* $query_Check_API = "SELECT api_token FROM admin WHERE api_token = ? AND id = ?"; */
    $stmt_Check_API = $con->prepare("SELECT * FROM admin WHERE id = ? AND api_token= ? ");
    $stmt_Check_API->bind_param("ss",$uid, $u_API_TOKEN);
    $stmt_Check_API->execute();
    $result_Check_API = $stmt_Check_API->get_result();
    $data = $result_Check_API->fetch_assoc();
    /* $data = json_encode($data); */
    if($result_Check_API->num_rows > 0)
    {
        $stmt = $con->prepare("SELECT id,name,email,profile_img_url FROM admin WHERE id = ? ");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {
            $data = $result->fetch_assoc();
            $data = json_encode($data);
            header("Content-Type: application/json");
            echo $data;
        }
        else
        {
            header("HTTP/1.1 403 Forbidden");
            die();
        }
    }
    else
    {
        header("HTTP/1.1 401  Unauthorized Access");
        die();
    }
} 
else
{
        header("HTTP/1.1 401 Unauthorized Access");
        die();
    }

?>

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

if (!isset($_SESSION['id'])) {
    header("Location: loginF.php?error=Please+Login+First+To+Access+Your+Account");
    die();
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        #Details
        {
            text-align: center;
        }
        body
        {
            color: white;
            font-size:xx-large;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("../IMGS/bg2.jpg");
        }
        button
        {
            margin-left: 44%;
            margin-top: 100px;
            background-color: rgb(251 202 53);
            height: 35px;
            border-radius: 15px;
            color: black;
            font-size:medium;
            text-align: center;
            font-weight: bold;
        }
        button:hover
        {
            background-color: rgb(227, 184, 52);
        }
    </style>
    <title>User Details</title>
</head>
<body>
    <div id="Details" ></div>
    <br>
    <button onclick="upload()">Update Profile Photo</button>
    <script>
        function upload()
        {
            /* window.location.href = "http://localhost/all/project/ecommerce/update/upload.html"; */
            
        }
    </script>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                var productContainer = document.getElementById('Details');
                productContainer.innerHTML += `
                    <div style="display: block;">
                    <img id="img" src='${data.profile_img_url}' alt='avatar' style="width:150px; height:150px; border-radius: 150px;"><br>
                        User ID: ${data.id}<br>
                        Username: ${data.name}<br>
                        Email: ${data.email}<br>
                        <!-- Add other user details as needed -->
                    </div>
                `;
            }
        }
        xhr.open("GET", "http://localhost/all/project/ecommerce/api/v1/account/accountAPI.php", true);
        xhr.withCredentials = true;
        xhr.send();
    </script>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="UploadedFile" id="">
			<input type="submit" value="Upload" name="submit">
		</form>
</body>
</html>

<?php
}
?>

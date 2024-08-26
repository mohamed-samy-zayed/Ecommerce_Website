<?php
require '../secF.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/forms_style.css">
</head>
<body >
    <div class="login-container" >
        <div id="website_name">
            <span id="E">E</span><span id="C">COMMERCE</span>
        </div>
        <h2>Forgot Password</h2>
        <div id="error"></div>
        <div id="success"></div>
        <form action="forgetPassB.php" method="POST" class="login-form" >
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Here Email Here" required autofocus>
            </div>
            <button type="submit" class="submit-btn">Send Reset Password Link</button>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_GET["error"]) && !empty($_GET["error"])) {
    @$error = urldecode($_GET["error"]);
    @$error = htmlspecialchars($error); // Use htmlspecialchars to prevent XSS
    @$error = htmlentities($error);
    echo "<script>";
    echo 'var errorMSG = document.getElementById("error");';
    echo "errorMSG.innerHTML=`<p style='fontFamily: system-ui; font-weight: bold; color: red; text-align: center; border: 1px solid red; padding: 10px; display: inline-block; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);'>$error</p>`";
    echo "</script>";
} 
if(isset($_GET["success"]) && !empty($_GET["success"])) {
    @$success = urldecode($_GET["success"]);
    @$success = htmlspecialchars($success); // Use htmlspecialchars to prevent XSS
    @$success = htmlentities($success);
    echo "<script>";
    echo 'var successMSG = document.getElementById("success");';
    echo "successMSG.innerHTML=`<p style='fontFamily: system-ui; font-weight: bold; color: green; text-align: center; border: 1px solid green; padding: 10px; display: inline-block; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);'>$success</p>`";
    echo "</script>";    
} 
?>
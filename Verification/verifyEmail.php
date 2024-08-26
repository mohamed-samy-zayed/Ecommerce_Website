<?php
require '../secF.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/forms_style.css">
</head>
<body>
    <div class="login-container" style="text-align: center;">
        <div id="website_name">
            <span id="E">E</span><span id="C">COMMERCE</span>
        </div>
        <h2>Email Verification</h2>
        <div id="error"></div>
        <div id="success"></div>
        <form action="verifyEmailB.php" method="POST" class="login-form">
            <div class="form-group">
                <label for="verifyCode">Verify Code:</label>
                <input type="text" id="verifyCode" name="verifyCode" placeholder="Enter Email Verification Code" required autofocus>
            </div>
            <button type="submit" class="submit-btn">Verify</button>
        </form>
    </div>

    <?php
if(isset($_GET["error"]) && !empty($_GET["error"])) {
    $error = htmlspecialchars($_GET["error"]); // Use htmlspecialchars to prevent XSS
    echo "<script>";
    echo 'var errorMSG = document.getElementById("error");';
    echo "errorMSG.innerHTML=`<p style='fontFamily: system-ui; font-weight: bold; color: red; text-align: center; border: 1px solid red; padding: 10px; display: inline-block; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);'>$error</p>`";
    echo "</script>";
} 
if(isset($_GET["success"]) && !empty($_GET["success"])) {
    $success = htmlspecialchars($_GET["success"]); // Use htmlspecialchars to prevent XSS
    echo "<script>";
    echo 'var successMSG = document.getElementById("success");';
    echo "successMSG.innerHTML=`<p style='fontFamily: system-ui; font-weight: bold; color: green; text-align: center; border: 1px solid green; padding: 10px; display: inline-block; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);'>$success</p>`";
    echo "</script>";    
} 
?>

</body>
</html>

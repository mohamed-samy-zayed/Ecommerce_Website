<?php
session_start();
require '../secF.php';
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header("Location: http://localhost/all/project/ecommerce/");
} elseif(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
    header("Location: http://localhost/all/project/ecommerce/admin/");
}
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login.css">
    <!-- try -->
    <meta charset="utf-8">
        <title>PORTRAIT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
    <!-- try -->
</head>
<body >
    <div class="login-container" style="text-align: center;">
        <div id="website_name">
            <span id="E">POR</span><span id="C">TRAIT</span>
        </div>
        <h2>Admin Login</h2>
        <div id="error" style="display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;">
        </div>
        <div id="success" style="display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;">
        </div>
        <form action="loginB.php" method="POST" class="login-form" >
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <!-- <div class="links">
                <a id="reset" class="links" href="ForgotPass/forgetPass.php" target="_blank">Forget Password</a>
                <a id="sign"  class="links" href="signup.php">Sign Up</a>
            </div> -->
            <button type="submit" class="submit-btn">Login</button>
        </form>
    </div>
</body>
</html>

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

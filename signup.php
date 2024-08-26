<?php
session_start();
require 'secF.php';
if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    header("Location: http://localhost/all/project/ecommerce/");
}
elseif(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']))
{
    header("Location: http://localhost/all/project/ecommerce/admin/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="signup-container" style="text-align: center;">
        <div id="website_name">
            <span id="E">POR</span><span id="C">TRAIT</span>
        </div>
        <h2>Signup</h2>
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
        <form action="signupB.php" method="POST" class="signup-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
            </div>
            <div style="text-align: center;">
                <a id="login"  class="links" href="login.php">I Already Have Account</a>
            </div>  
            <button type="submit" class="submit-btn">Signup</button>
        </form>
    </div>

</body>
</html>

<?php
    if(isset($_GET["error"]) && !empty($_GET["error"]))
    {
        @$error = @$_GET["error"];
        @$error = htmlspecialchars($error);
        @$error = htmlentities($error);
        
        echo "<script>";
        echo 'var errorMSG = document.getElementById("error");';
        echo "errorMSG.innerHTML=`<p style='fontFamily: system-ui; font-weight: bold; color: red; text-align: center; border: 1px solid red; padding: 10px; display: inline-block; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);'>".@$error."</p>`";
        echo "</script>";
    } 
    if(isset($_GET["success"]) && !empty($_GET["success"]))
    {
        @$success = @$_GET["success"];
        @$success = htmlspecialchars($success);
        @$success = htmlentities($success);
        echo "<script>";
        echo 'var errorMSG = document.getElementById("success");';
        echo "errorMSG.innerHTML=`<p style='fontFamily: system-ui; font-weight: bold; color: green; text-align: center; border: 1px solid green; padding: 10px; display: inline-block; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);'>".@$success."</p>`";
        echo "</script>";    
    } 
    ?>
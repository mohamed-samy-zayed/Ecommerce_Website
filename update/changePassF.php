<?php
require '../secF.php';

session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
?>

<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #website_name
            {
                color: rgb(251 202 53);
                font-size: 30px;
                font-weight: bolder;
            }
            
            #E
            {
                color: rgb(251 202 53);
                background-color: #3d464d;
                padding: 5px;
            }
            #C
            {
                color: #3d464d;
                background-color: rgb(251 202 53);
                padding: 5px;
                
            }
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: url("../../IMGS/bg4.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        
            .email-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
                text-align: center;
            }
        
            .email-container h2 {
                margin-bottom: 20px;
            }
        
            .email-form {
                display: flex;
                flex-direction: column;
            }
        
            .form-group {
                margin-bottom: 15px;
            }
        
            .form-group label {
                font-weight: bold;
                display: block;
                margin: 10px;
            }
            .form-group input {
                width: 100%;
                padding: 8px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .submit-btn {
                background-color: rgb(251 202 53);
                color: black;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
            }
        
            .submit-btn:hover {
                background-color: rgb(227, 184, 52);
            }
        </style>
    </head>
        <body>
            <div class="email-container">
                <div id="website_name">
                    <span id="E">E</span><span id="C">COMMERCE</span>
                </div>
                <h2>Reset Password</h2>
                <div id="error"></div>
                <div id="success"></div>
                <form action="changePassB.php" method="POST" class="email-form" >
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter Your Email Address" required autofocus>
                        
                        <!-- <label for="op">Old Password:</label>
                        <input type="password" id="op" name="op" placeholder="Enter Your Old Password" required >
                        -->
                        <label for="np">New Password:</label>
                        <input type="password" id="np" name="np" placeholder="Enter Your New Password" required >
                        
                        <label for="c_np">Confirm Password:</label>
                        <input type="password" id="c_np" name="c_np" placeholder="Enter Your Confirm Password" required >
                    
                    </div>
                    <button type="submit" class="submit-btn">Update</button>
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
}
else
{
    header("Location: http://localhost/all/project/ecommerce/login.php?error=please+logged+in+first");
}
    ?>
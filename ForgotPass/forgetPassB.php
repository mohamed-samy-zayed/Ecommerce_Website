<?php
require '../sec.php';
session_start();

if(isset($_POST['email']))
{
    $email = $_POST['email'];
    if(empty($email))
    {
        header("Location: http://localhost/all/project/ecommerce/ForgotPass/forgetPass.php?error=Email+Required");
        die();
    }
    elseif(!filter_var($email , FILTER_VALIDATE_EMAIL))
    {
        header("Location: http://localhost/all/project/ecommerce/ForgotPass/forgetPass.php?error=Email+Is+Not+Valid");
        die();
    }
    else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }
}
else
{
    header("Location: http://localhost/all/project/ecommerce/ForgotPass/forgetPass.php?error=Email+Is+Required");
    die();
}

// Generate the token
@$resetPassToken = bin2hex(random_bytes(32));

$con = new mysqli("localhost","root","","users");
if($con->connect_error)
{
    header("Location: http://localhost/all/project/ecommerce/ForgotPass/forgetPass.php?error=Failed+To+Connect+With+Database");
    die();
}

$check_email_if_exist = $con->prepare("SELECT id,name,email FROM user WHERE email = ? ");
$check_email_if_exist->bind_param("s", $email);
$check_email_if_exist->execute();
$result = $check_email_if_exist->get_result();
                if($result->num_rows > 0)
                {
                    @$_SESSION['email'] = $email;
                    $set_Token_Sql = $con->prepare("UPDATE user SET reset_token = ? WHERE email = ? ");
                    $set_Token_Sql->bind_param("ss", $resetPassToken, $email);
                    $set_Token_Sql->execute();
                    @$ResetLink = 'http://localhost/all/project/ecommerce/ForgotPass/resetPass.php?token='.$resetPassToken;
                    @require 'sendResetLink.php';
                    $error = str_contains($msg,"Could not connect to SMTP host. Failed to connect to serverSMTP server error"); 
                    if($error)
                    {
                        header("Location: http://localhost/all/project/ecommerce/ForgotPass/forgetPass.php?error=Connection+With+SMTP+Server+Failed+Please+Try+Again+Later");
                    }
                    else
                    {
                        header("Location: http://localhost/all/project/ecommerce/ForgotPass/forgetPass.php?success=The+Password+ResetLink+Has+Been+Sent+Successfully+Please+Check+Your+Email");
                    }
                    die();
                }
                else
                {
                    header("Location: http://localhost/all/project/ecommerce/ForgotPass/forgetPass.php?error=This+Email+Not+Found");
                }
?>

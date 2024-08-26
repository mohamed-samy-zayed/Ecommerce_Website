<?php
require '../sec.php';
session_start();

if(isset($_SESSION['email']))
{
    @$email = $_SESSION['email'];
}
else
{
    header("Location: http://localhost/all/project/ecommerce/ForgotPass/forgetPass.php?error=Email+Required");
    die();
}
if(isset($_POST['token']) && !empty($_POST['token']))
{
    $userToken = $_POST['token'];
    if(isset($_POST['np']) && !empty($_POST['np']) && isset($_POST['c_np']) && !empty($_POST['c_np']))
    {
        $new_pass = $_POST['np'];
        $conf_new_pass = $_POST['c_np'];
        if($new_pass == $conf_new_pass)
        {
            $con = new mysqli("localhost","root","","users");
            if($con->connect_error)
            {
                header("Location: http://localhost/all/project/ecommerce/ForgotPass/resetPass.php?token=".$userToken."&error=Failed+To+Connect+With+Database");
                die();
            }
            else
            {
                /* $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
                $stmt->bind_param("s",$email); */
                $stmt = $con->prepare("SELECT * FROM user WHERE email = ? AND reset_token = ?");
                $stmt->bind_param("ss", $email, $userToken);
                $stmt->execute();
                $result = $stmt->get_result();
                if($result->num_rows > 0)
                {
                    /*  
                    $data = $result->fetch_assoc();
                    $db_token = $data['reset_token'];
                    if($userToken == $db_token)
                    { */
                        $hash_pass = password_hash($new_pass, PASSWORD_DEFAULT);
                        $stmt = $con->prepare("UPDATE user
                        SET password_hash = ?
                        WHERE email = ? ;
                        ");
                        $stmt->bind_param("ss",$hash_pass, $email);
                        $stmt->execute();
                        // Delete Token From DB
                        $stmt = $con->prepare("UPDATE user
                        SET reset_token = ''
                        WHERE email = ? ;
                        ");
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        header("Location: http://localhost/all/project/ecommerce/login.php?success=Password+Changed+Successfully");
                        die();
                    }
                    else
                    {
                        header("Location: http://localhost/all/project/ecommerce/ForgotPass/resetPass.php?token=".$userToken."&error=Invalid+Token");
                        die();
                    }
                /* }
                else
                {
                    header("Location: http://localhost/all/project/ecommerce/ForgotPass/resetPass.php?token=".$userToken."&error=Invalid+Email+This+Email+Not+Found");
                    die();
                } */
            }
        }
        
        else
        {
            header("Location: http://localhost/all/project/ecommerce/ForgotPass/resetPass.php?token=".$userToken."&error=The+Two+Fields+Are+Not+Equal");
            die();
        }
    
    }    
    else
    {
        header("Location: http://localhost/all/project/ecommerce/ForgotPass/resetPass.php?token=".$userToken."&error=The+Two+Fields+Are+Required");
        die();
    }
}
else
{
    die("There Is No Token");
}

?>
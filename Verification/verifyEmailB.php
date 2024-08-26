<?php
require '../sec.php';
session_start();

if(isset($_POST['verifyCode']))
    {
        $code = urldecode($_POST['verifyCode']);
        $con = new mysqli("localhost","root","","users");
        if($con->connect_error)
        {
            header("Location: http://localhost/all/project/ecommerce/Verification/verifyEmail.php?error=Failed+To+Connect+with+Database");
            die();
        }
        else
        {
            if(isset( $_SESSION['email'] ))
            {
                @$email = $_SESSION['email'];
            }
            else
            {
                header("Location: http://localhost/all/project/ecommerce/signup.php?error=Sign+First+Your+Email+Does+Not+Exist+In+Your+Session");
            }
            $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0)
            {
                $data = $stmt_result->fetch_assoc();
                $db_code = $data['verifyCode'];
                if($code == $db_code)
                {
                    $stmt = $con->prepare("UPDATE user
                    SET verified = 'Y'
                    WHERE email = ? ;
                    ");
                    $stmt->bind_param("s",$email);
                    $stmt->execute();
                //Delete Verification Code
                    $stmt = $con->prepare("UPDATE user
                    SET verifyCode = ''
                    WHERE email = ? ;
                    ");
                    $stmt->bind_param("s",$email);
                    $stmt->execute();
                    
                    header("Location: http://localhost/all/project/ecommerce/login.php?success=Successfully+Signed+Up+Please+Login");
                    die();
                }
                else
                {
                    // Delete Email If Number Of Trying To Verify Email More Than Or Equal 3 Times
                    $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
                    $stmt->bind_param("s",$email);
                    $stmt->execute();
                    $stmt_result = $stmt->get_result();
                    if($stmt_result->num_rows > 0)
                    {
                        $data = $stmt_result->fetch_assoc();
                        $num_err_try = $data['err_try'];
                        if($num_err_try >= 2)
                        {
                            $stmt = $con->prepare("DELETE FROM user
                            WHERE email = ? ;
                            ");
                            $stmt->bind_param("s",$email);
                            $stmt->execute();
                            header("Location: http://localhost/all/project/ecommerce/Verification/verifyEmail.php?error=Your+Email+Has+Deleted+Because+You+Try+To+Verify+Three+Times+With+Wrong+Code");
                            die();
                        }
                        else
                        {
                            $stmt = $con->prepare("UPDATE user
                            SET err_try = err_try + 1
                            WHERE email = ? ;
                            ");
                            $stmt->bind_param("s",$email);
                            $stmt->execute();
                        }
                    }
                    header("Location: http://localhost/all/project/ecommerce/Verification/verifyEmail.php?error=The+Code+Is+Not+Right");
                    die();
                }
            }
            else
            {
                header("Location: http://localhost/all/project/ecommerce/Verification/verifyEmail.php?error=Your+Email+Not+Founded");
                die();
            }
        }
    }
    {
        header("Location: http://localhost/all/project/ecommerce/Verification/verifyEmail.php?error=Verification+Code+Is+Required");
    }
    
?>
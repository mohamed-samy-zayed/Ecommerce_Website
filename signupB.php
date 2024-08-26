<?php
session_start();
require 'sec.php';

// Get Values

@$name = urldecode($_POST['name']);
@$name = ltrim($name);
@$name = rtrim($name);
@$email = urldecode($_POST['email']);
@$email = ltrim($email);
@$email = rtrim($email);
@$password = urldecode($_POST['password']);
@$password = ltrim($password);
@$password = rtrim($password);
@$confirmPassword = urldecode($_POST['confirmPassword']);
@$confirmPassword = ltrim($confirmPassword);
@$confirmPassword = rtrim($confirmPassword);
// Logic & Security  Check
if(empty($name))
{
    header("Location: http://localhost/all/project/ecommerce/signup.php?error=The+Name+Is+Required");
    die();
}
else
{
@$name = strip_tags($name);
@$name = htmlspecialchars($name);
@preg_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],$name,"");
@$name = str_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],"",$name);
}

if(empty($email))
{
    header("Location: http://localhost/all/project/ecommerce/signup.php?error=Email+Required");
    die();
}
elseif(!filter_var($email , FILTER_VALIDATE_EMAIL))
{
    header("Location: http://localhost/all/project/ecommerce/signup.php?error=Email+Is+Not+Valid");
    die();
}
else{
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    $email = strip_tags($email) ;
    $email = str_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],"",$email);
}

if(strlen($password) < 8)
{
    header("Location: http://localhost/all/project/ecommerce/signup.php?error=Password+Should+Be+8+or+more+of+mixed+numbers+and+charachters");
    die();
}
else
{
@$password = strip_tags($password);
@$password = htmlspecialchars($password);
@preg_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],$name,"");
@$password = str_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],"",$password);
}
if($password !== $confirmPassword)
{
    header("Location: http://localhost/all/project/ecommerce/signup.php?error=The+Two+Passwords+Are+Not+Equal");
    die();
}
/*******************************************/
// PASSWORD_DEFAULT More Security Layer ===> Hash The Password With Add Uniqe Sault To Password To Prevent Dictionary Attack With (rainbow tables) to Crack Passwords .
$password_hash = password_hash($password,PASSWORD_DEFAULT);
// Connect with database
$con = new mysqli("localhost","root","","users");
if($con->connect_error)
{
    header("Location: http://localhost/all/project/ecommerce/signup.php?error=Failed+To+Connect+with+Database");
    die();
}

// Check IF Email Is Allready Exsits IN Database OR Not
$query_Check_E = "SELECT email FROM user WHERE email = ?";
$stmt_Check_E = $con->prepare($query_Check_E);
$stmt_Check_E->bind_param("s",$email);
$stmt_Check_E->execute();

$result_Check_E = $stmt_Check_E->get_result();
if($result_Check_E->num_rows > 0)
{
    header("Location: http://localhost/all/project/ecommerce/signup.php?error=This+Email+Already+Exists+Please+Select+Another+One");
    die();
}
else
{
    $_SESSION['email'] = $email;
    $verifyCode = mt_rand(100000, 999999);
    $sql = "INSERT INTO user (name, email, password_hash, verifyCode,verified)
            VALUES (?, ?, ?, ?, 'N')";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssi",$name,$email,$password_hash, $verifyCode);
    $stmt->execute();

    require 'sendVerifyCode.php';
    header("Location: Verification/verifyEmail.php?success=We+Has+Successfully+Sent+A+Code+To+Your+Email.");
    die();
}
?>
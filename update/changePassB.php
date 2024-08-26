<?php
require  '../sec.php';
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])&& isset($_SESSION['email']))
{
    // Get Values
    $email = $_POST['email'];
    /* $oldp = $_POST['op']; */
    $newp = $_POST['np'];
    $confp = $_POST['c_np'];
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];

    // Logic & Security  Check
    if(empty($email))
    {
        header("Location: http://localhost/all/project/ecommerce/update/changePassF.php?error=Email+Required");
        die();
    }
    /* elseif($email == $_SESSION['email'])
    {
        header("Location: http://localhost/all/project/ecommerce/update/changePassF.php?error=Email+Is+Wrong");
        die();
    } */
    elseif(!filter_var($email , FILTER_VALIDATE_EMAIL))
    {
        header("Location: http://localhost/all/project/ecommerce/update/changePassF.php?error=Email+Is+Not+Valid");
        die();
    }
    else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }

    /* if(empty($oldp))
    {
        header("Location: http://localhost/all/project/ecommerce/update/changePassF.php?error=The+Old+Password+Is+Required");
        die();
    }
    else
    {
        @$oldp = strip_tags($oldp);
        @$oldp = htmlspecialchars($oldp);
        @preg_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],$oldp,"");
        @$oldp = str_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],"",$oldp);
    }
 */
    if(empty($newp))
    {
        header("Location: http://localhost/all/project/ecommerce/update/changePassF.php?error=The+New+Password+Is+Required");
        die();
    }
    else
    {
        @$newp = strip_tags($newp);
        @$newp = htmlspecialchars($newp);
        @preg_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],$newp,"");
        @$newp = str_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],"",$newp);
    }

    if(strlen($newp) < 8)
    {
        header("Location: http://localhost/all/project/ecommerce/update/changePassF.php?error=New+Password+Should+Be+8+or+more+of+mixed+numbers+and+charachters");
        die();
    }
    else
    {
    @$password = strip_tags($password);
    @$password = htmlspecialchars($password);
    @preg_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],$name,"");
    @$password = str_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],"",$password);
    }
    if($newp !== $confp)
    {
        header("Location: http://localhost/all/project/ecommerce/update/changePassF.php?error=The+Two+Passwords+Are+Not+Equal");
        die();
    }

    // Connect With Database
    $con = new mysqli("localhost","root","","users");

    $stmt1 = $con->prepare("SELECT * FROM user WHERE id = ?;");
    $stmt1->bind_param("s",$id);
    $stmt1->execute();
    $result = $stmt1->get_result();    
    if($result->num_rows > 0)
    {
        $data = $result->fetch_assoc();
        /* if(password_verify($oldp, $data["password_hash"]) )
        { */
        if($data["email"] == $email)
        {
            $newp = password_hash($newp,PASSWORD_DEFAULT);
            $stmt2 = $con->prepare("UPDATE user
            SET password_hash = ?
            WHERE id = ? AND email = ?;");
            $stmt2->bind_param("sss",$newp,$id,$email);
            $stmt2->execute();
            header("Location: changePassF.php?success=Password+Changed+Successfully");
        }
        else
        {
            header("Location: changePassF.php?error=Your+Email+Is+Wrong");
        }
        /* }
        else
        {
            header("Location: changePassF.php?error=Old+Password+Is+Wrong");
        } */
    }
    else
    {
        header("Location: changePassF.php?error?There+Is+Not+Account+With+This+Email+OR+Username");
    } 

}
else
{
    header("Location: http://localhost/all/project/ecommerce/login.php?error=please+logged+in+first");
} 

?>
<?php
require '../sec.php';
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email']))
{   
    @$sessionE = $_SESSION['email'];
    @$oldE = $_POST['oe'];
    @$newE = $_POST['ne'];
    // sec
    function filter($param)
        {
            $param = strip_tags($param) ;
            $param = str_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],"",$param);
            $param = htmlspecialchars($param);
            return $param;
        }
        @$oldE = filter($oldE);
        @$newE = filter($newE);
        // Logic Check
        if($oldE != $sessionE)
        {
            header("Location: http://localhost/all/project/ecommerce/update/changeEmailF.php?error=This+Email+Is+not+belongs+to+you");
            die();
        }
        // Connect With Database
        @$con = new mysqli("localhost","root","","users");
        if($con->connect_error)
        {
            header("Location: http://localhost/all/project/ecommerce/update/changeEmailF.php?error=Failed+To+Connect+With+Database");
            die();
        }
        @$stmt = $con->prepare("SELECT * From user WHERE email = ?");
        @$stmt->bind_param("s" , $oldE);
        @$stmt->execute();
        @$result = $stmt->get_result();
        if($result->num_rows > 0)
        {
            @$data = $result->fetch_assoc();
            if($data['id'] == $_SESSION['id'] && $data['email'] == $oldE &&  $data['email'] == $sessionE )
            {
                @$update = $con->prepare("UPDATE user SET email = ? WHERE id = ?");
                @$update->bind_param("ss",$newE,$_SESSION['id']);
                @$update->execute();
                unset($_SESSION['email']);
                $_SESSION['email'] = $newE;
                header("Location: changeEmailF.php?success=Email+Updated+Successfully");
            }
            else
            {
                header("Location: changeEmailF.php?error=Your+Information+Is+Not+Correct");
            }   
        }
        else
        {
            header("Location: changeEmailF.php?error=Email+Not+Exsist+In+Database");
        }
}
else
{
    header("Location: changeEmailF.php?error=Please+Login+First");
}

?>
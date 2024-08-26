<?php
require 'sec.php';
session_start();

if(@$_SERVER['REQUEST_METHOD'] == 'POST'):
    if(($_POST["email"]) != "" & ($_POST["password"]) != "")
    {
        /* Getting Parameters Username & Password */
        @$email = urldecode($_POST["email"]);
        @$email = ltrim($email);
        @$email = rtrim($email);
        @$password = urldecode($_POST["password"]);
        @$password = ltrim($password);
        @$password = rtrim($password);
        /* Filter Parameters Username & Password For Security */
        function filter($param)
        {
            $param = strip_tags($param) ;
            $param = str_replace(["\\","#","--","-","+","/","$","||","|","\"","'","script","alert","confirm","eval","system","prompt","src","(",")","`",""],"",$param);
            $param = htmlspecialchars($param);
            return $param;
        }
        @$email = filter($email);
        @$password = filter($password);
        /*******************************************/
        //@$password_hash = password_hash($password,PASSWORD_DEFAULT);

        /* Make Sure From Login Information with Database Info */
        @$con = new mysqli("localhost","root","","users");
        if($con->connect_error)
        {
            header("Location: http://localhost/all/project/ecommerce/login.php?error=Failed+To+Connect+With+Database");
            die();
        }
        $stmt = $con->prepare("select * from user where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['verified'] !== 'Y')
            {
                header("Location: http://localhost/all/project/ecommerce/login.php?error=Your+Email+Not+Verified+Yet");
                die();
            }
            if(password_verify($password, $data['password_hash']))
            {
                // Generate And Set User Api Token Into Database 
                @$API_TOKEN = bin2hex(random_bytes(32));
                $set_Token_Sql = $con->prepare("UPDATE user SET api_token = ? WHERE id = ? ");
                $set_Token_Sql->bind_param("ss", $API_TOKEN, $data['id']);
                $set_Token_Sql->execute();
                
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['name'];
                $_SESSION['email'] = $email;
                $_SESSION['api_token'] = $API_TOKEN;
                header("Location: index.php");
            }
            else{
                header("Location: http://localhost/all/project/ecommerce/login.php?error=Invalid+Username+or+Password!");
                die();
            }
        }
        else{
            header("Location: http://localhost/all/project/ecommerce/login.php?error=The+Email+Not+Found!");
            die();
        }
    }
    else{
        /* Return To Login Page Again */
        header("Location: http://localhost/all/project/ecommerce/login.php?error=Email+and+Password+Fields+Required");
        die();
    }
    endif;
    ?>
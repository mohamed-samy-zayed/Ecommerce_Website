<?php
session_start();

// Check if admin is logged in
if(!isset($_SESSION['admin_id']) || empty($_SESSION['admin_id'])) {
    redirectToErrorPage("Unauthorized access");
}

require "../sec.php";

// Check Request Method
if ($_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    redirectToErrorPage("Method Not Allowed");
} else {
    if(isset($_POST['form']) && !empty($_POST['form'])) {
        switch($_POST['form']) {
            case 'add_user_account':
                addUserAccount();
                break;
            case 'delete_user_account':
                deleteUserAccount();
                break;
            case 'search_user_account':
                searchUserAccount();
                break;
            case 'modify_user_account':
                modifyUserAccount();
                break;
            default:
                redirectToErrorPage("Unknown Request");
        }
    } else {
        redirectToErrorPage("Invalid Request");
    }
}

function addUserAccount() {
    // Check if all fields are provided
    $requiredFields = ['name', 'password', 'email', 'email_verify'];
    foreach($requiredFields as $field) {
        if(!isset($_POST[$field]) || empty($_POST[$field])) {
            redirectToErrorPage("All fields are required");
        }
    }

    $name = trim(urldecode($_POST['name']));
    $email = trim(urldecode($_POST['email']));
    $password = trim(urldecode($_POST['password']));
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $verify_option = ($_POST['email_verify'] == 'Y') ? 'Y' : 'N';

    // Validate verify option
    if($verify_option !== 'Y' && $verify_option !== 'N') {
        redirectToErrorPage("Invalid verify Email Option");
    }

    // Check if the email already exists
    $con = new mysqli("localhost","root","","users");
    if($con->connect_error) {
        redirectToErrorPage("Failed To Connect With Database");
    }

    $stmt = $con->prepare("SELECT * FROM `user` WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $con->close();
        redirectToErrorPage("This Email Already Exists In Database Choose Another One");
    } else {
        $stmt = $con->prepare("INSERT INTO `user`( `name`, `email`, `password_hash`, `api_token`, `reset_token`, `reset_token_expires_at`, `profile_img_url`, `verifyCode`, `verified`, `err_try`) VALUES (?, ?, ?, null, null, null, null, null, ?, 0)");
        $stmt->bind_param("ssss", $name, $email, $password_hash, $verify_option);
        $stmt->execute();
        $con->close();
        header("Location: http://localhost/all/project/ecommerce/admin/index.php?success=User+Account+Successfully+Added+To+Database");
        die();
    }
}
function modifyUserAccount() {
    // Check if all fields are provided
    $requiredFields = ['email', 'password', 'email_verify'];
        if(!isset($_POST['email']) || empty($_POST['email'])) {
            redirectToErrorPage("Email Field IS Required");
        }

    $email = trim(urldecode($_POST['email']));

    if(isset($_POST['password']) && !empty($_POST['password']))
    {
        $password = trim(urldecode($_POST['password']));
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
    }

    if(isset($_POST['email_verify']) && !empty($_POST['email_verify']))
    {
        $verify_option = $_POST['email_verify'];
        // Validate verify option
        if($verify_option !== 'Y' && $verify_option !== 'N') {
            redirectToErrorPage("Invalid verify Email Option");
        }
    }

    // Check if the email already exists
    $con = new mysqli("localhost","root","","users");
    if($con->connect_error) {
        redirectToErrorPage("Failed To Connect With Database");
    }

    $stmt = $con->prepare("SELECT * FROM `user` WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        
        if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['email_verify']) && !empty($_POST['email_verify']))
        {
            $stmt = $con->prepare("UPDATE `user` SET `password_hash` = ?, `verified` = ? WHERE `email` = ?");
            $stmt->bind_param("sss", $password_hash, $verify_option, $email);
            $stmt->execute();
            $con->close();
            header("Location: http://localhost/all/project/ecommerce/admin/index.php?success=User+Account+Successfully+Updated");
            die();
        }
        else if(isset($_POST['password']) && !empty($_POST['password']))
        {
            $stmt = $con->prepare("UPDATE `user` SET `password_hash` = ? WHERE `email` = ?");
            $stmt->bind_param("ss", $password_hash, $email);
            $stmt->execute();
            $con->close();
            header("Location: http://localhost/all/project/ecommerce/admin/index.php?success=User+Account+Successfully+Updated");
            die();
        }
        else if(isset($_POST['email_verify']) && !empty($_POST['email_verify']))
        {
            $stmt = $con->prepare("UPDATE `user` SET `verified` = ? WHERE `email` = ?");
            $stmt->bind_param("ss", $verify_option, $email);
            $stmt->execute();
            $con->close();
            header("Location: http://localhost/all/project/ecommerce/admin/index.php?success=User+Account+Successfully+Updated");
            die();
        }
    }
}

function deleteUserAccount() {
    // Check if email is provided
    if(!isset($_POST['email']) || empty($_POST['email'])) {
        redirectToErrorPage("Email Required");
    }

    $email = trim(urldecode($_POST['email']));
    $con = new mysqli("localhost","root","","users");

    $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if($stmt_result->num_rows > 0) {
        $stmt = $con->prepare("DELETE FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $con->close();
        header("Location: http://localhost/all/project/ecommerce/admin/index.php?success=User+Account+Successfully+Deleted+From+Database");
        die();
    } else {
        $con->close();
        redirectToErrorPage("This Email Is Not Exists In Database Check Your Email");
    }
}

function searchUserAccount() {
    $con = new mysqli("localhost", "root", "", "users");
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = trim(urldecode($_POST['email']));
        $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
    } elseif(isset($_POST['name']) && !empty($_POST['name'])) {
        $name = trim(urldecode($_POST['name']));
        $searchTerm = "%{$name}%";
        $stmt = $con->prepare("SELECT * FROM user WHERE `name` LIKE ?");
        $stmt->bind_param("s", $searchTerm);
    } else {
        redirectToErrorPage("Required Email OR Name");
    }

    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = [];
        while ($row = $stmt_result->fetch_assoc()) {
            $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    } else {
        $con->close();
        redirectToErrorPage("This Email Or Name Is Not Exists In Database Check Your Input");
    }
    $con->close();
}

function redirectToErrorPage($error) {
    header("Location: http://localhost/all/project/ecommerce/admin/index.php?error=" . urlencode($error));
    die();
}
?>

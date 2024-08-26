<?php
require '../../../secF.php';

$con = new mysqli("localhost","root","","men");
if($con->connect_error)
{
    die("Connection Error ");
}
$data = [];
    $stmt = $con->prepare("SELECT * FROM jackets LIMIT 4;");
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    $stmt = $con->prepare("SELECT * FROM shirts LIMIT 4;");
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
    }
    $stmt = $con->prepare("SELECT * FROM shoes LIMIT 4;");
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
    }
    
$data = json_encode($data);
header("Content-Type: application/json");
echo $data;
?>
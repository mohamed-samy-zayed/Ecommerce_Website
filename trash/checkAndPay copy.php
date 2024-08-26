<?php
session_start();

// Check if there are any session variables with keys starting with 'p_'
if (!empty($_SESSION)) {
    // Iterate over the $_SESSION array
    foreach ($_SESSION as $key => $value) {
        // Check if the key starts with 'p_'
        if (strpos($key, 'p_') === 0) {
            // Output the key and value
            echo "Key: $key, Value: $value<br>";
        }
    }
} else {
    echo "No session variables found with keys starting with 'p_'.";
}

                                                /* OR  */

// Initialize an empty array to store values
$sessionValues = array();

// Check if there are any session variables with keys starting with 'p_'
if (!empty($_SESSION)) {
    // Iterate over the $_SESSION array
    foreach ($_SESSION as $key => $value) {
        // Check if the key starts with 'p_'
        if (strpos($key, 'p_') === 0) {
            // Append the value to the array
            $sessionValues[$key] = $value;
        }
    }

    // Output the collected values (optional)
    print_r($sessionValues);
} else {
    echo "No session variables found with keys starting with 'p_'.";
}
 /* Filter Testing  */
 /* Fetch Product INFO Ends */
@$filter = $_GET['filter'];
if(!isset($filter) || empty($filter) || $filter == "all")
{
    $stmt = $con->prepare("SELECT * FROM $category");
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "0-100")
{
    $min = 0;
    $max = 100;
    $stmt = $con->prepare("SELECT * FROM $category WHERE price BETWEEN ? AND ? ");
    $stmt->bind_param("ii",$min,$max);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "100-200")
{
    $min = 100;
    $max = 200;
    $stmt = $con->prepare("SELECT * FROM $category WHERE price BETWEEN ? AND ? ");
    $stmt->bind_param("ii",$min,$max);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "200-300")
{
    $min = 200;
    $max = 300;
    $stmt = $con->prepare("SELECT * FROM $category WHERE price BETWEEN ? AND ? ");
    $stmt->bind_param("ii",$min,$max);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "300-400")
{
    $min = 300;
    $max = 400;
    $stmt = $con->prepare("SELECT * FROM $category WHERE price BETWEEN ? AND ? ");
    $stmt->bind_param("ii",$min,$max);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "400-500")
{
    $min = 400;
    $max = 500;
    $stmt = $con->prepare("SELECT * FROM $category WHERE price BETWEEN ? AND ? ");
    $stmt->bind_param("ii",$min,$max);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "black")
{
    $c="black";
    $stmt = $con->prepare("SELECT * FROM $category WHERE color = ? ");
    $stmt->bind_param("s",$c);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "white")
{
    $c="white";
    $stmt = $con->prepare("SELECT * FROM $category WHERE color = ? ");
    $stmt->bind_param("s",$c);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "red")
{
    $c="red";
    $stmt = $con->prepare("SELECT * FROM $category WHERE color = ? ");
    $stmt->bind_param("s",$c);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "blue")
{
    $c="blue";
    $stmt = $con->prepare("SELECT * FROM $category WHERE color = ? ");
    $stmt->bind_param("s",$c);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "green")
{
    $c="green";
    $stmt = $con->prepare("SELECT * FROM $category WHERE color = ? ");
    $stmt->bind_param("s",$c);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
elseif($filter == "brown")
{
    $c="brown";
    $stmt = $con->prepare("SELECT * FROM $category WHERE color = ? ");
    $stmt->bind_param("s",$c);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
        $data = [];
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        $data = json_encode($data);
        header("Content-Type: application/json");
        echo $data;
    }
    else
    {
        echo "There Is NO Data With This Filter";
    }
}
else
{
    echo "Un Known Filter";
}
?>

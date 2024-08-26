<?php
require '../../../../secF.php';

$con = new mysqli("localhost","root","","accessories");
if($con->connect_error)
{
    die("Connection Error ");
}

/* Check Watch Type   */
$types= array("classic","sport","casual","smart","premium");
@$type = $_GET['type'];
if((!isset($type) || empty($type) || !in_array($type,$types)) )
{
    echo "Un Wanted Watch Type";
}
else
{
    /* Check Filter  */
    @$filter = $_GET['filter'];
    if((!isset($filter) || empty($filter) || $filter == "all") )
    {
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE type = ?");
        $stmt->bind_param("s",$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE price BETWEEN ? AND ? AND type = ? ");
        $stmt->bind_param("iis",$min,$max,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE price BETWEEN ? AND ? AND type = ?");
        $stmt->bind_param("iis",$min,$max,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE price BETWEEN ? AND ? AND type = ?");
        $stmt->bind_param("iis",$min,$max,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE price BETWEEN ? AND ? AND type = ?");
        $stmt->bind_param("iis",$min,$max,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE price BETWEEN ? AND ? AND type = ?");
        $stmt->bind_param("iis",$min,$max,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE color = ? AND type = ?");
        $stmt->bind_param("ss",$c,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE color = ? AND type = ?");
        $stmt->bind_param("ss",$c,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE color = ? AND type = ?");
        $stmt->bind_param("ss",$c,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE color = ? AND type = ?");
        $stmt->bind_param("ss",$c,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE color = ? AND type = ?");
        $stmt->bind_param("ss",$c,$type);
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
        $stmt = $con->prepare("SELECT * FROM men_watches WHERE color = ? AND type = ?");
        $stmt->bind_param("ss",$c,$type);
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

}
?>

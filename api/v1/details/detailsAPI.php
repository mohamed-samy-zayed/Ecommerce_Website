<?php 

$allowed_categories = array("jackets","shirts","shoes","t_shirts","men","women","laptops","monitors","floor_spotlight","wall_spotlight","roof_spotlight","table_spotlight","wall_watch","special_watch","table_watch","alarm_watch","men_watches","women_watches","fan","pants","chairs","tables","men_glasses","women_glasses","camera","men_hand_bag","women_hand_bag","electric","carpets");
$allowed_kinds = array("men","women","child","computers","furniture","accessories","camera");
$men_cat = array("jackets_m","shirts_m","shoes_m");
$women_cat = array("jackets_w","shirts_w","shoes_w");
// Check Setting Parameters Values
if(!isset($_GET['id']) || empty($_GET['id']))
{
    die("id Parameter Required");
}
if(!isset($_GET['category']) || empty($_GET['category']))
{
    die("category Parameter Required");
}
if(!isset($_GET['kind']) || empty($_GET['kind']))
{
    die("kind Parameter Required");
}

@$id = $_GET['id'];
@$kind = $_GET['kind'];
@$category = $_GET['category'];

if(in_array(@$category,$men_cat))
{
    @$category  = "men";
}
elseif(in_array(@$category,$women_cat))
{
    @$category = "women";
}
else
{
    @$category = $_GET['category'];
}

// Get Product Header Details

if(!in_array($category, $allowed_categories))
{
    die("Un Wanted Category");
}
if(!in_array($kind, $allowed_kinds))
{
    die("Un Wanted Kind");
}

// Connect Wit Database
@$con = new mysqli("localhost","root","",$kind);
if($con->connect_error)
{
    die("Connection Failed");
}
/* @$stmt = "SELECT * From ".$category ." Where id = ".$id;

 */
@$stmt = $con->prepare("SELECT * FROM $category WHERE id = ?");
$stmt->bind_param("i",$id);
@$stmt->execute();
@$result = $stmt->get_result();
if($result->num_rows > 0)
{
    $data = $result->fetch_assoc();
    $data = json_encode($data);
    header("Content-Type: application/json");
    echo $data;
}
else
{
    die("Sorry Product Not Founded");
}


?>
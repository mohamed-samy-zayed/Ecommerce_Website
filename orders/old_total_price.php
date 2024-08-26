<?php
// Check if the user is not logged in

// Get Session Products 
// Start
// Initialize variables
$products = []; // Array to store product data
$productCounter = 0; // Counter for the number of products found

for ($i = 1; $i <= 100; $i++) {
    $paramName = "p_" . $i;

    // Check if the session variable exists
    if (isset($_SESSION[$paramName])) {
        $paramValue = $_SESSION[$paramName];

        // Parse the URL to extract the query string
        $urlComponents = parse_url($paramValue);

        // Initialize default values
        $productID = "Undefined";
        $productCategory = "Undefined";
        $productKind = "Undefined";
        $productSize = "Undefined";
        $productColor = "Undefined";
        $productQuantity = "Undefined";
        $productLink = "Undefined"; // Add this line to initialize the product link

        // Check if there is a query string
        if (isset($urlComponents['query'])) {
            // Parse the query string into variables
            parse_str($urlComponents['query'], $queryParams);

            // Set variables based on the parsed parameters
            $productID = isset($queryParams['id']) ? $queryParams['id'] : "Undefined";
            $productCategory = isset($queryParams['category']) ? $queryParams['category'] : "Undefined";
            $productKind = isset($queryParams['kind']) ? $queryParams['kind'] : "Undefined";
            $productSize = isset($queryParams['size']) ? $queryParams['size'] : "Undefined";
            $productColor = isset($queryParams['color']) ? $queryParams['color'] : "Undefined";
            $productQuantity = isset($queryParams['quantity']) ? $queryParams['quantity'] : "Undefined";
            $productLink = $paramValue; // Store the product link
        }

        // Increment product counter
        $productCounter++;

        // Store product data in the products array
        $products[$productCounter] = [
            'id' => $productID,
            'category' => $productCategory,
            'kind' => $productKind,
            'size' => $productSize,
            'color' => $productColor,
            'quantity' => $productQuantity,
            'link' => $productLink, // Add the link to the array
        ];
    }
}

if (isset($_SESSION['Total_Price'])) {
    unset($_SESSION['Total_Price']);
}

$total_price = 0;

function removeCategorySuffix($category) {
    $specialCategories = array(
        $specialCategories = array(
            "shirts_w" => "shirts",
            "shoes_w" => "shoes",
            "jackets_w" => "jackets",
            "jackets_m" => "jackets",
            "shoes_m" => "shoes",
            "shirts_m" => "shirts",
            "shoes_c" => "shoes",
            "t_shirt_c" => "t_shirts",
            "jackets_c" => "jackets",
            "shirts_c" => "shirts"
            // Add more mappings as needed
        ));

    // Check if the category is in the special categories array
    if (array_key_exists($category, $specialCategories)) {
        $category = $specialCategories[$category];
    }

    return $category;
}

for ($p = 1; $p <= $productCounter; $p++) {
    $p_id = $products[$p]['id'];
    $p_table = $products[$p]['category']; // Corrected variable name
    $p_db = $products[$p]['kind'];
    $p_count = $products[$p]['quantity'];
    $p_table = removeCategorySuffix($p_table);

    
    // Connect With Database
    $con = new mysqli("localhost", "root", "", $p_db);
    if ($con->connect_error) {
        header("HTTP/1.1 504 Internal Server Error");
        die();
    }
    
    $stmt = $con->prepare("SELECT * FROM $p_table WHERE id = ?");
    $stmt->bind_param("s", $p_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $total_price += ($data['price'] * $p_count);
    }
    $stmt->close();
    $con->close();
}

$_SESSION['Total_Price'] = $total_price;
if(isset($_SESSION['Deliver_Price']) ){
    $_SESSION['Deliver_Price'] = 30 ;
}
?>

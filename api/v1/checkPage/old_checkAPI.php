<?php
session_start();
require '../../../secF.php';

// Initialize an empty array to store product information
$productInfoArray = array();

function fetchProductInfo($url, $sessionKey) {
    global $productInfoArray;

    // Check if the value is a valid URL
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Parse the URL to extract parameters
        $urlParams = parse_url($url, PHP_URL_QUERY);
        parse_str($urlParams, $urlParamsArray);

        // Extract product information
        $productId = isset($urlParamsArray['id']) ? $urlParamsArray['id'] : null;
        $productCategory = isset($urlParamsArray['category']) ? $urlParamsArray['category'] : null;
        $productKind = isset($urlParamsArray['kind']) ? $urlParamsArray['kind'] : null;
        $productSize = isset($urlParamsArray['size']) ? $urlParamsArray['size'] : null;
        $productColor = isset($urlParamsArray['color']) ? $urlParamsArray['color'] : null;
        $productQuantity = isset($urlParamsArray['quantity']) ? $urlParamsArray['quantity'] : null;

        // Remove specific suffixes from the category name
        $productCategory = removeCategorySuffix($productCategory);

        // Fetch product information from the database
        $con = new mysqli("localhost", "root", "", $productKind);
        if ($con->connect_error) {
            die("Connection Error");
        }

        $stmt = $con->prepare("SELECT * FROM $productCategory WHERE id = ?");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the product is found in the database
        if ($result->num_rows > 0) {
            $productInfo = $result->fetch_assoc();

            // Add additional information to the product information
            $productInfo['size'] = $productSize;
            $productInfo['color'] = $productColor;
            $productInfo['quantity'] = $productQuantity;
            $productInfo['sessionKey'] = $sessionKey;

            // Store the product information in the array
            $productInfoArray[] = $productInfo;
        }

        $stmt->close();
        $con->close();
    }
}

function removeCategorySuffix($category) {
    $specialCategories = array(
        $specialCategories = array(
            "shirts_w" => "women",
            "shoes_w" => "women",
            "jackets_w" => "women",
            "jackets_m" => "men",
            "shoes_m" => "men",
            "shirts_m" => "men",
            "shoes_c" => "child",
            "t_shirt_c" => "child",
            "jackets_c" => "child",
            "shirts_c" => "child"
            // Add more mappings as needed
        ));

    // Check if the category is in the special categories array
    if (array_key_exists($category, $specialCategories)) {
        $category = $specialCategories[$category];
    }

    return $category;
}


// Check if there are any session variables with keys starting with 'p_'
if (!empty($_SESSION)) {
    // Iterate over the $_SESSION array
    foreach ($_SESSION as $key => $value) {
        // Check if the key starts with 'p_'
        if (strpos($key, 'p_') === 0) {
            // Call the function to fetch product information
            fetchProductInfo($value, $key);
        }
    }

    // Output the collected product information as JSON
    header("Content-Type: application/json");
    echo json_encode($productInfoArray);
} else {
    echo "No session variables found with keys starting with 'p_'.";
}
?>

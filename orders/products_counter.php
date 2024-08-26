<?php
session_start();
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
            $productID = $queryParams['id'] ?? "Undefined";
            $productCategory = $queryParams['category'] ?? "Undefined";
            $productKind = $queryParams['kind'] ?? "Undefined";
            $productSize = $queryParams['size'] ?? "Undefined";
            $productColor = $queryParams['color'] ?? "Undefined";
            $productQuantity = $queryParams['quantity'] ?? "Undefined";
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
if(count($products) >=0)
{
    echo (count($products));
}
else
{
    echo 0;
}
?>
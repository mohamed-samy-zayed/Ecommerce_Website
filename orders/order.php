<?php
require '../sec.php';
session_start();
// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect to login page with an error message
    header("Location: http://localhost/all/project/ecommerce/loginF.php?error=Login+First");
    die();
}
@$username =$_POST['username'] ;
@$phone = $_POST['phoneNumber'];
@$loc = $_POST['loc'];

function safeParam($param)
{
    // Remove leading and trailing whitespaces
    $param = trim($param);
    // Remove HTML and PHP tags
    $param = strip_tags($param);
    // Convert special characters to HTML entities to prevent XSS
    $param = htmlspecialchars($param, ENT_QUOTES, 'UTF-8');

    return $param;
}

// Get Session Products 
// Start
// Initialize variables
$products = []; // Array to store product data
$productCounter = 0; // Counter for the number of products found

// Loop through a range of parameter numbers
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

// Now you have an array $products containing data for each found product
// The keys of the array are the product numbers (1, 2, ..., n)
//End

@$username = safeParam($username);
@$phone = safeParam($phone);
@$loc = safeParam($loc);

if($productCounter <= 0)
{
    header("Location: msg_error-zero-products.php");
    exit();
}

if(isset($phone) && isset($loc) && isset($username) && !empty($phone) && !empty($loc) && !empty($username))
{
    // Function to create a folder if it doesn't exist
    function createFolder($folderPath)
    {
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
    }

    // Function to create a file with a unique name and extension
    function createUniqueFile($folderPath, $baseFileName, $fileExtension)
    {
        $counter = 1;
        $fileName = $baseFileName;

        // Check if the file already exists, if yes, add a counter to the name
        while (file_exists($folderPath . '/' . $fileName . '.' . $fileExtension)) {
            $counter++;
            $fileName = $baseFileName . '_' . $counter;
        }

        return $folderPath . '/' . $fileName . '.' . $fileExtension;
    }

    // Process the form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get user information
        $userId = $_SESSION['id'];
        $userEmailFromSession = $_SESSION['email'];

        // Get the current date and time
        $currentDateTime = date("Y-m-d H:i:s");

        // Create a folder for the user if it doesn't exist
        $userFolderPath = '../Order_data/' . $userId;
        createFolder($userFolderPath);

        // Create a unique file for the user with a .txt extension
        $baseFileName = 'user_order';
        $fileExtension = 'txt';
        $userFilePath = createUniqueFile($userFolderPath, $baseFileName, $fileExtension);

        // Save user information to the file
        $fileContent = "Real User INFO: \n\t";
        $fileContent .= "Date and Time: $currentDateTime\n\t";
        $fileContent .= "User Real ID From Session: ".$_SESSION['id']."\n\t";
        $fileContent .= "User Real Name From Session: ".$_SESSION['username']."\n\t";
        $fileContent .= "User Real Email From Session: $userEmailFromSession\n\n";

        $fileContent .= "User Order Information: \n\t";
        $fileContent .= "Username: $username\n\t"; // Include the username here
        $fileContent .= "Phone Number: $phone\n\t";
        $fileContent .= "Location: $loc\n";

        // Add product count to the file
        $Total_Price = round($_SESSION['Total_Price']);
        $Final_Price = round($_SESSION['Total_Price']) + 35;
        $fileContent .= "\nNumber of Products: $productCounter\n";
        $fileContent .= "\nTotal Price: [ $".$Total_Price." ]\n";
        $fileContent .= "\nDelivery Price: [ $30 ]\n";
        $fileContent .= "\nFinal Price: [ $".$Final_Price." ]\n";

        // Add product information to the file
        foreach ($products as $productNumber => $productData) {
            $fileContent .= "\nProduct $productNumber Information:\n\t";
            $fileContent .= "Product Database: {$productData['kind']}\n\t";
            $fileContent .= "Product Table: {$productData['category']}\n\t";
            $fileContent .= "Product ID: {$productData['id']}\n\t";
        
            // Add the size, color, and count from the array
            $fileContent .= "Size: {$productData['size']}\n\t";
            $fileContent .= "Color: {$productData['color']}\n\t";
            $fileContent .= "Count: {$productData['quantity']}\n\t";
        
            // Add the link from the session if available
            $fileContent .= "Product Link : {$productData['link']}\n";
        }

        file_put_contents($userFilePath, $fileContent);
        $OrderDetails = $fileContent;
        require 'sendOrderDetailsToMe.php';
        // Redirect to a success page or display a success message
        header("Location: msg_success.php");
        exit();
    }
    // If the form is not submitted, redirect to the contact page
    header("Location: ../detail.php");
    exit();
}
else
{
    header("Location: msg_error.php");
}

?>

<?php
require '../sec.php';
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect to login page with an error message
    header("Location: http://localhost/all/project/ecommerce/login.php?error=Login+First");
    exit();
}

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
    $userName = urldecode($_POST['name']);
    $userPhone = urldecode($_POST['tel']);
    $userEmail = urldecode($_POST['email']);
    $userMessage = urldecode($_POST['message']);
    $userEmailFromSession = $_SESSION['email'];

    // Get the current date and time
    $currentDateTime = date("Y-m-d H:i:s");

    // Create a folder for the user if it doesn't exist
    $userFolderPath = '../Contact_data/' . $userId;
    createFolder($userFolderPath);

    // Create a unique file for the user with a .txt extension
    $baseFileName = 'user_message';
    $fileExtension = 'txt';
    $userFilePath = createUniqueFile($userFolderPath, $baseFileName, $fileExtension);
    // Some Security Layers
    $userName = strip_tags($userName);
    $userEmail = strip_tags($userEmail);
    $userPhone = strip_tags($userPhone);
    $userMessage = strip_tags($userMessage);

    // Save user information to the file
    $fileContent = "Real User INFO: \n\t";
    $fileContent .= "Date and Time: $currentDateTime\n\t";
    $fileContent .= "User Real ID From Session: ".$_SESSION['id']."\n\t";
    $fileContent .= "User Real Name From Session: ".$_SESSION['username']."\n\t";
    $fileContent .= "User Real Email From Session: $userEmailFromSession\n\n";
    
    $fileContent .= "User Message: \n\t";
    $fileContent .= "Name: $userName\n\t";
    $fileContent .= "Phone: $userPhone\n\t";
    $fileContent .= "Email: $userEmail\n\t";
    $fileContent .= "Message:\n\t\t$userMessage\n";

    file_put_contents($userFilePath, $fileContent);

    // Redirect to a success page or display a success message
    header("Location: contact_us.php?success=Successfully+Submitted+Thank+You+For+Your+Message");
    exit();
}
else
{
// If the form is not submitted, redirect to the contact page
header("Location: contact_us.php?error=Unknown+Submitted+Form");
exit();
}
?>

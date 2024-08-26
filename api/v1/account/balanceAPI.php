<?php
session_start();
if(isset($_SESSION['id']))
    {
        $userId = $_SESSION['id'];
    } 

header('Content-Type: application/json');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
    exit();
}

// Function to get current balance
function getBalance($conn, $userId) {
    $sql = "SELECT balance FROM user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['balance'];
    }
    return 0;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = isset($_POST['amount']) ? $_POST['amount'] : null;
    if(isset($_SESSION['id']))
        {
            $userId = $_SESSION['id'];
        } 
    if ($amount !== null) {
        // Validate the amount
        if (is_numeric($amount) && $amount > 0) {
            $sql = "UPDATE user SET balance = balance + ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("di", $amount, $userId);

            if ($stmt->execute()) {
                echo json_encode(['success' => true, 'balance' => getBalance($conn, $userId)]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Error updating balance: ' . $conn->error]);
            }

            $stmt->close();
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid amount.']);
        }
    } else {
        // Return current balance
        echo json_encode(['success' => true, 'balance' => getBalance($conn, $userId)]);
    }
}

$conn->close();
?>

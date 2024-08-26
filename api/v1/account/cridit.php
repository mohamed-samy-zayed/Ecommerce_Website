<?php
header('Content-Type: application/json');
session_start();

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

// Change this to the actual user ID
if(isset($_SESSION['id']))
{
    $userId = $_SESSION['id'];
} 
$totalPrice = isset($_SESSION['Total_Price']) ? $_SESSION['Total_Price'] : 0;

if ($totalPrice > 0) {
    // Get user balance
    $sql = "SELECT balance FROM user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $balance = $row['balance'];

        if ($balance >= $totalPrice) {
            // Deduct the total price from balance
            $newBalance = $balance - $totalPrice;
            $sql = "UPDATE user SET balance = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("di", $newBalance, $userId);

            if ($stmt->execute()) {
                echo json_encode(['success' => true, 'message' => 'Payment successful. Your new balance is ' . $newBalance]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Error updating balance: ' . $conn->error]);
            }

            $stmt->close();
        } else {
            echo json_encode(['success' => false, 'message' => 'Insufficient balance.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'User not found.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid total price.']);
}

$conn->close();
?>

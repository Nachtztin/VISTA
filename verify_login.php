<?php
include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

// Assuming you have a function to hash passwords or you're using plain text for simplicity
$hashed_password = hash('sha256', $password); // Example hashing, adjust according to your setup

$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    echo "success";
} else {
    echo "failure";
}

$stmt->close();
$conn->close();
?>
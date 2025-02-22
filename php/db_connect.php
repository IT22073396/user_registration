<?php
$servername = "localhost";
$username = "root";  // Default XAMPP username
$password = "";  // Default XAMPP password (empty)
$database = "user_db";  // Your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

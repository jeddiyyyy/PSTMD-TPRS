<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "pstmdtprs_db";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define base URL
define('BASE_URL', '/pstmdtprs/');
?>
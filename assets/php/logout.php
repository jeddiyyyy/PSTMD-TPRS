<?php
session_start();
include "../../config/config.php";
header("Content-Type: application/json");

$response = [
    "status" => "error",
    "message" => ""
];

if (isset($_SESSION['user_id'])) {

    $stmt = $conn->prepare("UPDATE users SET session_token=NULL WHERE id=?");
    $stmt->bind_param("i", $_SESSION['user_id']);
    $stmt->execute();
    $stmt->close();

    session_unset();
    session_destroy();

    $response["status"] = "success";
    $response["message"] = "Logged out successfully.";

} else {
    $response["message"] = "No active session.";
}

echo json_encode($response);
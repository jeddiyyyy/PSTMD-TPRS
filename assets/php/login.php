<?php
session_start();
include "../../config/config.php";

header('Content-Type: application/json');

$response = [
    "status" => "error",
    "message" => ""
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['usr'] ?? '');
    $password = trim($_POST['pwd'] ?? '');

    if (empty($username) || empty($password)) {
        $response["message"] = "All fields are required.";
        echo json_encode($response);
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND (delete_status = 0 OR delete_status IS NULL)");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            // Generate secure session ID
            session_regenerate_id(true);

            // Create session token
            $sessionToken = bin2hex(random_bytes(32));

            // Save token in database
            $update = $conn->prepare("UPDATE users SET session_token=? WHERE id=?");
            $update->bind_param("si", $sessionToken, $user['id']);
            $update->execute();
            $update->close();

            // Store session data
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['session_token'] = $sessionToken;

            $response["status"] = "success";
            $response["redirect"] = "admin/index.php";

        } else {
            $response["message"] = "Invalid password.";
        }

    } else {
        $response["message"] = "User not found.";
    }

    $stmt->close();
}

echo json_encode($response);
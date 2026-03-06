<?php
session_start();
include "../../config/config.php";

// Check if user is User
if ($_SESSION['role'] !== 'user') {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

$action = $_GET['action'] ?? $_POST['action'] ?? null;

if ($action === 'get') {

    $id = intval($_GET['id'] ?? 0);

    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid user ID']);
        exit;
    }

    // USER can only access their own data
    if ($currentRole !== 'admin' && $id != $currentUserId) {
        echo json_encode(['success' => false, 'message' => 'Unauthorized']);
        exit;
    }

    $stmt = $conn->prepare("SELECT id, name, username, role FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(['success' => true, 'data' => $result->fetch_assoc()]);
    } else {
        echo json_encode(['success' => false, 'message' => 'User not found']);
    }

    exit;
}

if ($action === 'update') {

    $id = intval($_POST['id'] ?? 0);
    $name = trim($_POST['name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $role = $_POST['role'] ?? 'user';
    $password = $_POST['password'] ?? '';
    $account_status = $_POST['account_status'] ?? 'active';

    // USER can only update their own account
    if ($currentRole !== 'admin' && $id != $currentUserId) {
        echo json_encode(['success' => false, 'message' => 'Unauthorized action']);
        exit;
    }

    // If USER editing themselves → prevent role change
    if ($currentRole !== 'admin') {
        $role = 'user';
    }

    $delete_status = ($account_status === 'inactive') ? 1 : NULL;

    if ($id <= 0 || empty($name) || empty($username)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required']);
        exit;
    }

    // username check
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE username=? AND id!=?");
    $check_stmt->bind_param("si", $username, $id);
    $check_stmt->execute();

    if ($check_stmt->get_result()->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Username already exists']);
        exit;
    }

    // password update
    if (!empty($password)) {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("UPDATE users SET name=?, username=?, password=?, role=?, delete_status=? WHERE id=?");
        $stmt->bind_param("ssssii", $name, $username, $hashed_password, $role, $delete_status, $id);

    } else {

        $stmt = $conn->prepare("UPDATE users SET name=?, username=?, role=?, delete_status=? WHERE id=?");
        $stmt->bind_param("sssii", $name, $username, $role, $delete_status, $id);

    }

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'User updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Update failed']);
    }

    exit;
}
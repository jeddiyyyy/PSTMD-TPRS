<?php
session_start();
include "../../config/config.php";

// Check if user is admin
if ($_SESSION['role'] !== 'admin') {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

$action = $_GET['action'] ?? $_POST['action'] ?? null;

// CREATE USER PROCESS
if ($action === 'create') {
    $name = trim($_POST['name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? 'user';

    // Validation
    if (empty($name) || empty($username) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required']);
        exit;
    }

    // Check if username already exists
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE username=?");
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    if ($check_stmt->get_result()->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Username already exists']);
        exit;
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user
    $insert_stmt = $conn->prepare("INSERT INTO users (name, username, password, role) VALUES (?, ?, ?, ?)");
    $insert_stmt->bind_param("ssss", $name, $username, $hashed_password, $role);

    if ($insert_stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'User created successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error creating user: ' . $conn->error]);
    }
    exit;
}

// GET USER (for editing)
if ($action === 'get') {
    $id = intval($_GET['id'] ?? 0);

    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid user ID']);
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

// EDIT USER PROCESS
if ($action === 'update') {
    $id = intval($_POST['id'] ?? 0);
    $name = trim($_POST['name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $role = $_POST['role'] ?? 'user';
    $password = $_POST['password'] ?? '';
    $account_status = $_POST['account_status'] ?? 'active';

    //Convert status to Database
    $delete_status =($account_status ==='inactive') ?1 : NULL;

    // Validation
    if ($id <= 0 || empty($name) || empty($username)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required']);
        exit;
    }

    // Check if username already exists (for other users)
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE username=? AND id!=?");
    $check_stmt->bind_param("si", $username, $id);
    $check_stmt->execute();
    if ($check_stmt->get_result()->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Username already exists']);
        exit;
    }

    // Update password if provided
    if (!empty($password)) {
    $update_stmt = $conn->prepare("UPDATE users SET name=?, username=?, password=?, role=?, delete_status=? WHERE id=?");
    $update_stmt->bind_param("ssssii", $name, $username, $hashed_password, $role, $delete_status, $id);
} else {
    $update_stmt = $conn->prepare("UPDATE users SET name=?, username=?, role=?, delete_status=? WHERE id=?");
    $update_stmt->bind_param("sssii", $name, $username, $role, $delete_status, $id);
}

    if ($update_stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'User updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error updating user: ' . $conn->error]);
    }
    exit;
}

// DELETE USER PROCESS
if ($action === 'delete') {
    $id = intval($_POST['id'] ?? $_GET['id'] ?? 0);

    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid user ID']);
        exit;
    }

    // Prevent deleting the current admin user
    if ($id === $_SESSION['user_id']) {
        echo json_encode(['success' => false, 'message' => 'Cannot delete your own account']);
        exit;
    }

    $delete_stmt = $conn->prepare("UPDATE users SET delete_status = 1 WHERE id=?");
    $delete_stmt->bind_param("i", $id);

    if ($delete_stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'User deleted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error deleting user: ' . $conn->error]);
    }
    exit;
}

// GET ALL USERS
if ($action === 'list' || empty($action)) {
    $stmt = $conn->prepare("SELECT id, name, username, role FROM users WHERE delete_status = 0 OR delete_status IS NULL ORDER BY id DESC");
    $stmt->execute();
    $result = $stmt->get_result();
    $users = [];

    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    echo json_encode(['success' => true, 'data' => $users]);
    exit;
}

// FOR USERS ONLY (Edit Profile on Dropdown)
echo json_encode(['success' => false, 'message' => 'Invalid action']);

if ($action === 'get_profile') {

    $id = $_SESSION['user_id'];

    $stmt = $conn->prepare("SELECT id, name, username FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode([
            'success' => true,
            'data' => $result->fetch_assoc()
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'User not found'
        ]);
    }

    exit;
}
?>

<?php
if ($_SESSION['role'] !== 'admin') {
    exit;
}
include_once 'user_add.php';
include_once 'user_edit.php';

// Fetch all users from database
$users = [];
$stmt = $conn->prepare("SELECT id, name, username, role FROM users WHERE delete_status = 0 OR delete_status IS NULL ORDER BY id DESC");
if ($stmt) {
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    $stmt->close();
}

?>

<!-- DASHBOARD -->
<div class="card mt-4">
    <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
        <div>
            <h4 style="margin: 0;">User Management</h4>
        </div>
<div class="profile-section dropdown" style="position: relative; cursor: pointer;">
    <span class="profile-icon"></span>
    <span class="profile-name" onclick="toggleProfileDropdown()">
        Welcome, <?= htmlspecialchars($_SESSION['name'] ?? 'Admin') ?> ▾
    </span>
    <div class="profile-dropdown" id="profileDropdown">
        <button class="btn-logout" onclick="logout()">Logout</button>
    </div>
</div>
    </div>

    <div class="card-body">
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal">+ Add User</button>
        <div class="user-table-wrapper">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= htmlspecialchars($user['id']) ?></td>
                                <td><?= htmlspecialchars($user['username']) ?></td>
                                <td><?= htmlspecialchars($user['name']) ?></td>
                                <td>
                                    <span class="badge badge-<?= htmlspecialchars($user['role']) ?>">
                                        <?= htmlspecialchars($user['role']) ?>
                                    </span>
                                </td>
                                <td>
                                    <button type="button" class="btn-edit" onclick="editUserModal(<?= $user['id'] ?>)">&#9998; Edit</button>
                                    <button type="button" class="btn-delete" onclick="deleteUser(<?= $user['id'] ?>)">&#128465; Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" style="text-align:center; padding:2rem; color:#6b7f6b;">
                                No users found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
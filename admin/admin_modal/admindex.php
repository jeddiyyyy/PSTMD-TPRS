<?php
if ($_SESSION['role'] !== 'admin') {
    exit;
}
include_once 'user_add.php';
include_once 'user_edit.php';

// Fetch all users from database
$users = [];
$stmt = $conn->prepare("
    SELECT id, name, username, role, session_token, delete_status
    FROM users
    WHERE id != ?
    ORDER BY id DESC
");

if ($stmt) {
    $stmt->bind_param("i", $_SESSION['user_id']);
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
        <span class="profile-name" onclick="toggleProfileDropdown()"> Welcome,
            <span id="liveProfileName"> <?= htmlspecialchars($_SESSION['name'] ?? 'Admin') ?>
        </span> ▾
    </span>
            <div class="profile-dropdown" id="profileDropdown">
            <button class="btn-editprofile" onclick="editUserModal(<?= $_SESSION['user_id'] ?>)">Edit Profile</button>
            <button class="btn-logout" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>

    <div class="card-body">
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal">+ Add User</button>
    <button type="button" class="btn btn-successbtn mb-3" id="sortAscBtn">Sort ID Toggle</button>

    <!-- FILTER SECTION -->
        <div class="user-filters mb-3">
        <input type="text" id="filterName" placeholder="search Full Name">

        <select id="filterRole">
            <option value="">All Roles</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <select id="filterStatus">
            <option value="">All Logins</option>
            <option value="loggedin">Logged In</option>
            <option value="loggedout">Logged Out</option>
        </select>

        <select id="filterLogin">
            <option value="">All Status</option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
        <button type="button" class="btn btn-secondary" onclick="clearFilters()">Clear</button>
        </div>

<!-- MAIN USER MANAGEMENT TABLE -->
<div class="user-table-wrapper">
    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
                <th>Login Status</th>
                <th>Account Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
<?php if (!empty($users)): ?>
    <?php foreach ($users as $user): ?>
    <tr
        data-role="<?= strtolower($user['role']) ?>"
        data-login="<?= !empty($user['session_token']) ? 'loggedin' : 'loggedout' ?>"
        data-account="<?= (($user['delete_status'] ?? 0) == 0) ? 'active' : 'inactive' ?>"
    >
        <td><?= htmlspecialchars($user['id']) ?></td>
        <td><?= htmlspecialchars($user['username']) ?></td>
        <td><?= htmlspecialchars($user['name']) ?></td>
        <td>
            <span class="badge badge-<?= htmlspecialchars($user['role']) ?>">
                <?= htmlspecialchars($user['role']) ?>
            </span>
        </td>
        <!-- Login Status -->
        <td>
            <?php if (!empty($user['session_token'])): ?>
                <span class="status-badge status-online">Logged In</span>
            <?php else: ?>
                <span class="status-badge status-offline">Logged Out</span>
            <?php endif; ?>
        </td>
        <!-- Account Status -->
        <td>
            <?php if (($user['delete_status'] ?? 0) == 0): ?>
                <span class="status-badge status-active">Active</span>
            <?php else: ?>
                <span class="status-badge status-inactive">Inactive</span>
            <?php endif; ?>
        </td>
        <!-- Actions -->
        <td>
            <button type="button" class="btn-edit" onclick="editUserModal(<?= $user['id'] ?>)">
                &#9998; Edit
            </button>
            <button type="button" class="btn-delete" onclick="deleteUser(<?= $user['id'] ?>)">
                &#128465; Delete
            </button>
        </td>
    </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="7" style="text-align:center; padding:2rem; color:#6b7f6b;">
            No users found.
        </td>
    </tr>
<?php endif; ?>
</tbody>
    </table>
</div>
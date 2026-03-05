<?php
if ($_SESSION['role'] !=='user') {
    exit;
}
include_once 'record_add.php';
//include_once 'record_delete.php';

// Fetch all Franchise records from database

?>

<!-- DASHBOARD -->
    <div class="card mt-4">
        <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
    <div>
        <h4 style="margin: 0;">TPRS Records Management</h4>
    </div>
    <div class="profile-section dropdown" style="position: relative; cursor: pointer;">
    <span class="profile-icon"></span>
        <span class="profile-name" onclick="toggleProfileDropdown()"> Welcome,
            <span id="liveProfileName"> <?= htmlspecialchars($_SESSION['name'] ?? 'User') ?>
        </span> ▾
    </span>
            <div class="profile-dropdown" id="profileDropdown">
            <button class="btn-editprofile" onclick="editUserModal(<?= $_SESSION['user_id'] ?>)">Edit Profile</button>
            <button class="btn-settings" onclick="">Settings</button>
            <button class="btn-logout" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>


 <div class="card-body">
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addRecordModal">+ Add Record</button>
    <button type="button" class="btn btn-successbtn mb-3" id="sortAscBtn">Sort Case Number</button>
    <!-- FILTER SECTION -->
        <div class="user-filters mb-3">
        <input type="text" id="filterCase" placeholder="search Case#">

        <select id="filterToda">
            <option value="">All Toda</option>
            <option value="stw">STW</option>
            <option value="toda2">TODA2</option>
            <option value="toda3">TODA3</option>
        </select>

        <select id="filterStatus">
            <option value="">All Status</option>
            <option value="active">Active</option>
            <option value="expired">Expired</option>
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
                <th>Case #</th>
                <th>Toda</th>
                <th>Company Name</th>
                <th>Name</th>
                <th>Toda Status</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
</tbody>
    </table>
</div>
<?php
if ($_SESSION['role'] !=='user') {
    exit;
}
include_once 'add_record.php';
include_once 'admin_modal/user_edit.php'
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
            <button class="btn-editprofile">Edit Profile</button>
            <button class="btn-logout" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>


<div class="usercard-body">
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addRecordModal">+ Add Record</button>
    <button type="button" class="btn btn-successbtn mb-3" id="sortAscBtn">Sort Case Number</button>

    <!-- FILTER SECTION -->
        <div class="user-filters mb-3">
        <input type="text" id="filterCase" placeholder="search Case# (0000-0000)">

        <select id="filterType">
            <option value="">All Types</option>
            <option value="motor">Tricycle</option>
            <option value="cab">Pedicab</option>
        </select>

        <select id="filterClass">
            <option value="">All Class</option>
            <option value="forehire">For Hire</option>
            <option value="renewal">Renewal</option>
            <option value="supervision">For Supervision</option>
            <option value="private">Private</option>
        </select>

        <select id="filterLogin">
            <option value="">All Status</option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
        <button type="button" class="btn btn-secondary" onclick="clearFilters()">Clear</button>
        </div>

<!-- MAIN FRANCHISE TABLE -->
<div class="franchise-table-wrapper">
    <table class="franchise-table">
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
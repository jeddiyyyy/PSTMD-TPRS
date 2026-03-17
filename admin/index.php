<?php
session_start();
include_once "../config/config.php";
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PSTMD-TPRS</title>
    <link rel="stylesheet" href="../assets/css/materials/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admindex.css">
    <link rel="stylesheet" href="../assets/css/admintable.css">
    <link rel="stylesheet" href="../assets/css/usertable.css">
    <link rel="icon" href="../assets/icon/PSTMD.png" type="image/x-icon">
</head>

<header>
    <div class="header-logo">
        <img src="../assets/icon/caloocanlogo.png" alt="Caloocan Logo">
    </div>
    <div class="header-title">
        <h1>Public Safety and Traffic Management Department</h1>
        <h2>Tricycle and Pedicab Regulatory Services</h2>
</div>
    <div class="header-logo">
        <img src="../assets/icon/PSTMD.png" alt="PSTMD Logo">
    </div>
</header>


<?php
$page = $_GET['page'] ?? 'dashboard';
// All ADMINS are directed to admindex.php
if ($_SESSION['role'] === 'admin') {
    if ($page === 'add_user') {
        include "admin_modal/user_add.php"; // add user
    } elseif ($page === 'user_edit' && isset($_GET['id'])) {
        include "admin_modal/user_edit.php"; // edit user
    } elseif ($page === 'delete_user' && isset($_GET['id'])) {
        include "admin_smodal/delete_user.php"; // delete user
    } else {

        include "admin_modal/admindex.php";
    }
    // All USERS are directed to userindex.php
} elseif ($_SESSION['role'] === 'user') {
    if ($page ==='profile_edit') {
    include "user_modal/profile_edit.php";
    } else {
    include "user_modal/userindex.php";
    }
}
?>

<!-- SCRIPT COMPONENTS -->
<script src="../assets/js/materials/jquery-4.0.0.min.js"></script>
<script src="../assets/js/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap.min.js"></script>


<!-- SCRIPT FUNCTIONS -->
<script src="../assets/js/loginlogout.js"></script>

<!-- ADMIN SCRIPTS -->
<script src="../assets/js/adminfilter.js"></script>
<script src="../assets/js/adminusermanagement.js"></script>
<script src="../assets/js/adminprofiledropdown.js"></script>

<!-- USER SCRIPTS -->


</body>
</html>
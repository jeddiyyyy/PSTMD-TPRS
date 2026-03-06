<?php
session_start();
include "../config/config.php";
include "../admin/admin_modal/user_delete.php";
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
        include "modal/user_add.php";
    } elseif ($page === 'user_edit' && isset($_GET['id'])) {
        include "modal/user_add.php";
    } elseif ($page === 'delete_user' && isset($_GET['id'])) {
        include "modal/delete_user.php";
    } else {

        include "admin_modal/admindex.php";
    }
    // All USERS are directed to userindex.php
} elseif ($_SESSION['role'] === 'user') {
    // Default user view: show userindex.php (case records)
    include "user_modal/userindex.php";
}
?>

<!-- SCRIPT COMPONENTS -->
<script src="../assets/js/materials/jquery-4.0.0.min.js"></script>
<script src="../assets/js/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap.min.js"></script>


<!-- SCRIPT FUNCTIONS -->
<script src="../assets/js/loginlogout.js"></script>
<script src="../assets/js/adminfilter.js"></script>
<script src="../assets/js/adminusermanagement.js"></script>
<script src="../assets/js/adminprofiledropdown.js"></script>


</body>
</html>
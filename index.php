<?php
session_start();
include "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TPRS</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/indexletter.css">
    <link rel="icon" href="assets/icon/pstmd.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/materials/animate.min.css">
    <link rel="stylesheet" href="assets/css/materials/fontawesome.css">
    <link rel="stylesheet" href="assets/css/materials/fontawesome.min.css">
</head>
<body>

<div class="login-wrapper">
<div class="login-container">
    <div class="logo-header">
        <img src="assets/icon/PSTMD.png" alt="PSTMD LOGO" class="logo">
        <img src="assets/icon/caloocanlogo.png" alt="Caloocan Logo" class="logo">
        <img src="assets/icon/itdologo.png" alt="IT LOGO" class="logo">
    </div>
</div>

<div class="login-card">
    <div class="login-header">
        <h2>TPRS</h2>
        <p>Tricycle and Pedicab Regulatory Services</p>
    </div>

    <form class="login-form" id="loginForm" method="POST">
        <div class="form-group">
            <label for="username">USERNAME*</label>
            <div class="input-wrapper">
                <input type="text" id="usr" name="usr" required>

                <span class="input-icon">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                    </svg>
                </span>
            </div>
            <span class="error-message" id="emailError"></span>
        </div>

        <div class="form-group">
            <label for="password">PASSWORD*</label>
            <div class="input-wrapper">
                <input type="password" id="pwd" name="pwd" required>
                <button type="button" class="password-toggle" onclick="togglePassword()" title="Toggle password">
                    <svg id="eyeIcon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </button>
            </div>
            <span class="error-message" id="password-error"></span>
        </div>
        <button type="submit" class="login-btn" id="loginsubmit">
            <span class="btn-text">LOGIN</span>
        </button>
    </form>
</div>

<footer class="footer-text">JARRELL DC - ITDO Caloocan &copy; 2026</footer>

<!-- Script Components -->
<script src="assets/js/materials/jquery-4.0.0.min.js"></script>
<script src="assets/js/sweetalert2/sweetalert2.all.min.js"></script>
<script src="assets/js/materials/materialize.min.js"></script>
<script src="assets/js/materials/moment.min.js"></script>
<script src="assets/js/materials/popper.min.js"></script>

<!-- Script Functions -->
<script src="assets/js/indexpasswordtoggle.js"></script>
<script src="assets/js/loginlogout.js"></script>


</body>
</html>
<?php
session_start();
include "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/icon/PSTMD.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main/index.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <script src="assets/js/sweetalert2/sweetalert2.all.min.js"></script>
    <title>PSTMD-TPRS</title>
</head>
<body>

<div class="login-wrapper">
<div class="login-container">
    <div class="logo-header">
        <img src="assets/img/caloocanlogo.png" alt="Caloocan Logo" class="logo">
        <img src="assets/icon/PSTMD.png" alt="PSTMD LOGO" class="logo">
        <img src="assets/icon/itdologo.png" alt="IT LOGO" class="logo">
    </div>
</div>

<div class="login-card">
    <div class="login-header">
        <h2>PSTMD-TPRS</h2>
        <p>Public Safety and Traffic Management Department <br>Tricyle and Pedicab Regulatory Services</p>
    </div>

    <form class="login-form" id="loginForm" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
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
            <label for="password">Password</label>
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
            <span class="btn-text">Login</span>
        </button>
    </form>
</div>

<footer class="footer-text">JARRELL DC - ITDO Caloocan &copy; 2026</footer>

<script src="assets/js/sweetalert2/sweetalert2.all.min.js"></script>
<script src="assets/js/jquery-4.0.0.min.js"></script>
<script src="assets/js/main/loginlogout.js"></script>
<script src="assets/js/main/passwordtoggle.js"></script>


</body>
</html>
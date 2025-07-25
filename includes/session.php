<?php
// Session management
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Session timeout (30 minutes)
$timeout_duration = 1800;

// Check if user is logged in and session is valid
if (isset($_SESSION['user_id'])) {
    // Check session timeout
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
        session_unset();
        session_destroy();
        header("Location: " . SITE_URL . "/auth/login.php?timeout=1");
        exit();
    }
    $_SESSION['last_activity'] = time();
}

// Check if admin is logged in and session is valid
if (isset($_SESSION['admin_id'])) {
    // Check session timeout
    if (isset($_SESSION['admin_last_activity']) && (time() - $_SESSION['admin_last_activity']) > $timeout_duration) {
        session_unset();
        session_destroy();
        header("Location: " . SITE_URL . "/auth/login.php?timeout=1");
        exit();
    }
    $_SESSION['admin_last_activity'] = time();
}

// Check if driver is logged in and session is valid
if (isset($_SESSION['driver_id'])) {
    // Check session timeout
    if (isset($_SESSION['driver_last_activity']) && (time() - $_SESSION['driver_last_activity']) > $timeout_duration) {
        session_unset();
        session_destroy();
        header("Location: " . SITE_URL . "/auth/login.php?timeout=1");
        exit();
    }
    $_SESSION['driver_last_activity'] = time();
}
?>
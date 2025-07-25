<?php
// Common utility functions

/**
 * Sanitize input data
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Generate random string
 */
function generate_random_string($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

/**
 * Upload file
 */
function upload_file($file, $target_dir) {
    $target_file = $target_dir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if file is actual image
    if (isset($_POST["submit"])) {
        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }
    
    // Check file size (5MB limit)
    if ($file["size"] > 5000000) {
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        return false;
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return basename($file["name"]);
        } else {
            return false;
        }
    }
}

/**
 * Format currency
 */
function format_currency($amount) {
    return "$" . number_format($amount, 2);
}

/**
 * Format date
 */
function format_date($date) {
    return date('M d, Y', strtotime($date));
}

/**
 * Check if user is logged in
 */
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

/**
 * Check if admin is logged in
 */
function is_admin() {
    return isset($_SESSION['admin_id']);
}

/**
 * Check if driver is logged in
 */
function is_driver() {
    return isset($_SESSION['driver_id']);
}

/**
 * Redirect function
 */
function redirect($url) {
    header("Location: $url");
    exit();
}
?>
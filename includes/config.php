<?php
// Database configuration and connection
$host = 'localhost';
$dbname = 'autolink_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Site configuration
define('SITE_NAME', 'AutoLink');
define('SITE_URL', 'http://localhost/AutoLink-PHP_Project');
define('UPLOAD_PATH', dirname(__DIR__) . '/uploads/');
define('UPLOAD_URL', SITE_URL . '/uploads/');

// Default timezone
date_default_timezone_set('America/New_York');

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
// Logout handler
session_start();

// Destroy session
session_destroy();

// Redirect to home page
header("Location: ../index.php");
exit();
?>
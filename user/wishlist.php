<?php
// User wishlist
include '../includes/config.php';
include '../includes/session.php';
include '../includes/header.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>My Wishlist</h4>
                </div>
                <div class="card-body">
                    <p>Your saved cars will appear here.</p>
                    <!-- Wishlist cars will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
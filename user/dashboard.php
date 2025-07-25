<?php
// User dashboard
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
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5>Dashboard Menu</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="dashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
                    <a href="wishlist.php" class="list-group-item list-group-item-action">Wishlist</a>
                    <a href="rental-history.php" class="list-group-item list-group-item-action">Rental History</a>
                    <a href="purchase-history.php" class="list-group-item list-group-item-action">Purchase History</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4>Welcome to Your Dashboard</h4>
                </div>
                <div class="card-body">
                    <p>Welcome back! Here you can manage your profile, view your rental history, and more.</p>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5>0</h5>
                                    <p>Active Rentals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5>0</h5>
                                    <p>Wishlist Items</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5>0</h5>
                                    <p>Total Bookings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
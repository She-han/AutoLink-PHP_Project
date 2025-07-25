<?php
// Admin dashboard
include '../includes/config.php';
include '../includes/session.php';
include '../includes/header.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5>Admin Menu</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="index.php" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="cars.php" class="list-group-item list-group-item-action">Manage Cars</a>
                    <a href="users.php" class="list-group-item list-group-item-action">Manage Users</a>
                    <a href="rentals.php" class="list-group-item list-group-item-action">Manage Rentals</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4>Admin Dashboard</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-center bg-primary text-white">
                                <div class="card-body">
                                    <h5>0</h5>
                                    <p>Total Cars</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-success text-white">
                                <div class="card-body">
                                    <h5>0</h5>
                                    <p>Total Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-warning text-white">
                                <div class="card-body">
                                    <h5>0</h5>
                                    <p>Active Rentals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-info text-white">
                                <div class="card-body">
                                    <h5>$0.00</h5>
                                    <p>Total Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Recent Activity</h5>
                        <p>Recent system activity will appear here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
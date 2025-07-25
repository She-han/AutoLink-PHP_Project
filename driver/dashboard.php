<?php
// Driver dashboard
include '../includes/config.php';
include '../includes/session.php';
include '../includes/header.php';

// Check if driver is logged in
if (!isset($_SESSION['driver_id'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5>Driver Menu</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="dashboard.php" class="list-group-item list-group-item-action active">Dashboard</a>
                    <a href="trips.php" class="list-group-item list-group-item-action">Trip History</a>
                    <a href="earnings.php" class="list-group-item list-group-item-action">Earnings</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4>Driver Dashboard</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center bg-primary text-white">
                                <div class="card-body">
                                    <h5>0</h5>
                                    <p>Today's Trips</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center bg-success text-white">
                                <div class="card-body">
                                    <h5>$0.00</h5>
                                    <p>Today's Earnings</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center bg-info text-white">
                                <div class="card-body">
                                    <h5>5.0</h5>
                                    <p>Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Recent Trips</h5>
                        <p>Your recent trip history will appear here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
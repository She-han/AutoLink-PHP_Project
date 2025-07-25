<?php
// Driver earnings
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Earnings Report</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5>$0.00</h5>
                                    <p>Today</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5>$0.00</h5>
                                    <p>This Week</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5>$0.00</h5>
                                    <p>This Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5>$0.00</h5>
                                    <p>Total</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h5>Earnings History</h5>
                    <p>Your detailed earnings history will appear here.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
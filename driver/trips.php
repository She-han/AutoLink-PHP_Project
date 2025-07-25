<?php
// Driver trips
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
                    <h4>Trip History</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Pickup</th>
                                    <th>Drop-off</th>
                                    <th>Duration</th>
                                    <th>Earnings</th>
                                    <th>Rating</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="8" class="text-center">No trips found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
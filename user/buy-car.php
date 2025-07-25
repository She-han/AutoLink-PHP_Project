<?php
// Car purchase form
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Buy a Car</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="car_id">Select Car:</label>
                            <select class="form-control" id="car_id" name="car_id" required>
                                <option value="">Choose a car...</option>
                                <!-- Car options will be loaded dynamically -->
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="financing_option">Financing Option:</label>
                                    <select class="form-control" id="financing_option" name="financing_option" required>
                                        <option value="">Select option...</option>
                                        <option value="cash">Cash Payment</option>
                                        <option value="loan">Car Loan</option>
                                        <option value="lease">Lease</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="down_payment">Down Payment:</label>
                                    <input type="number" class="form-control" id="down_payment" name="down_payment" min="0" step="0.01">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="additional_notes">Additional Notes:</label>
                            <textarea class="form-control" id="additional_notes" name="additional_notes" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit Purchase Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
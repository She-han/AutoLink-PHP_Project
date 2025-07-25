<?php
// Car rental form
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
                    <h4>Rent a Car</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pickup_date">Pickup Date:</label>
                                    <input type="date" class="form-control" id="pickup_date" name="pickup_date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="return_date">Return Date:</label>
                                    <input type="date" class="form-control" id="return_date" name="return_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pickup_location">Pickup Location:</label>
                                    <input type="text" class="form-control" id="pickup_location" name="pickup_location" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="return_location">Return Location:</label>
                                    <input type="text" class="form-control" id="return_location" name="return_location" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="car_id">Select Car:</label>
                            <select class="form-control" id="car_id" name="car_id" required>
                                <option value="">Choose a car...</option>
                                <!-- Car options will be loaded dynamically -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
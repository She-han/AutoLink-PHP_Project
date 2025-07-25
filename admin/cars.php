<?php
// Admin manage cars
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Manage Cars</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addCarModal">Add New Car</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Make & Model</th>
                                    <th>Year</th>
                                    <th>Price/Day</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6" class="text-center">No cars found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Car Modal -->
<div class="modal fade" id="addCarModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Car</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="make">Make:</label>
                        <input type="text" class="form-control" id="make" name="make" required>
                    </div>
                    <div class="form-group">
                        <label for="model">Model:</label>
                        <input type="text" class="form-control" id="model" name="model" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Year:</label>
                        <input type="number" class="form-control" id="year" name="year" min="1900" max="2024" required>
                    </div>
                    <div class="form-group">
                        <label for="price_per_day">Price per Day:</label>
                        <input type="number" step="0.01" class="form-control" id="price_per_day" name="price_per_day" required>
                    </div>
                    <div class="form-group">
                        <label for="car_image">Car Image:</label>
                        <input type="file" class="form-control-file" id="car_image" name="car_image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Car</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
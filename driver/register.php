<?php
// Driver registration
include '../includes/config.php';
include '../includes/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Driver Registration</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="license_number">License Number:</label>
                                    <input type="text" class="form-control" id="license_number" name="license_number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="license_document">License Document:</label>
                                    <input type="file" class="form-control-file" id="license_document" name="license_document" accept=".pdf,.jpg,.jpeg,.png" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="vehicle_registration">Vehicle Registration:</label>
                                    <input type="file" class="form-control-file" id="vehicle_registration" name="vehicle_registration" accept=".pdf,.jpg,.jpeg,.png">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="experience">Driving Experience (years):</label>
                            <input type="number" class="form-control" id="experience" name="experience" min="1" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register as Driver</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
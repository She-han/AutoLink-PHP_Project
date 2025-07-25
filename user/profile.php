<?php
// User profile page
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
                    <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="profile.php" class="list-group-item list-group-item-action active">Profile</a>
                    <a href="wishlist.php" class="list-group-item list-group-item-action">Wishlist</a>
                    <a href="rental-history.php" class="list-group-item list-group-item-action">Rental History</a>
                    <a href="purchase-history.php" class="list-group-item list-group-item-action">Purchase History</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Profile</h4>
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
                                    <label for="profile_image">Profile Image:</label>
                                    <input type="file" class="form-control-file" id="profile_image" name="profile_image" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
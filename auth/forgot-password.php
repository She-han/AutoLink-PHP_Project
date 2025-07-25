<?php
// Forgot password page
include '../includes/config.php';
include '../includes/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Forgot Password</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <small class="form-text text-muted">Enter your email address to receive password reset instructions.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Reset Link</button>
                        <a href="login.php" class="btn btn-link">Back to Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
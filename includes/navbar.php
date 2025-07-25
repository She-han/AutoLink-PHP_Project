<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= SITE_URL ?>/index.php">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
                    <a href="<?= SITE_URL ?>/index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">
                    <a href="<?= SITE_URL ?>/about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : '' ?>">
                    <a href="<?= SITE_URL ?>/services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'pricing.php' ? 'active' : '' ?>">
                    <a href="<?= SITE_URL ?>/pricing.php" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'cars.php' ? 'active' : '' ?>">
                    <a href="<?= SITE_URL ?>/cars.php" class="nav-link">Cars</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'active' : '' ?>">
                    <a href="<?= SITE_URL ?>/blog.php" class="nav-link">Blog</a>
                </li>
                <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">
                    <a href="<?= SITE_URL ?>/contact.php" class="nav-link">Contact</a>
                </li>
                
                <?php if (is_logged_in()): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= SITE_URL ?>/user/dashboard.php">Dashboard</a>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/user/profile.php">Profile</a>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/user/wishlist.php">Wishlist</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/auth/logout.php">Logout</a>
                        </div>
                    </li>
                <?php elseif (is_driver()): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Driver Panel
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= SITE_URL ?>/driver/dashboard.php">Dashboard</a>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/driver/trips.php">Trips</a>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/driver/earnings.php">Earnings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/auth/logout.php">Logout</a>
                        </div>
                    </li>
                <?php elseif (is_admin()): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin Panel
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= SITE_URL ?>/admin/index.php">Dashboard</a>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/admin/cars.php">Manage Cars</a>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/admin/users.php">Manage Users</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= SITE_URL ?>/auth/logout.php">Logout</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="<?= SITE_URL ?>/auth/login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= SITE_URL ?>/auth/register.php" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= SITE_URL ?>/driver/register.php" class="nav-link">Drive with Us</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
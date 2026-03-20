<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-4">
        <a class="navbar-brand brand-box" href="index.php">
            <img src="Logo 250px.png" alt="InsightU Logo" class="navbar-logo">
            InsightU
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                
                <!-- These would normally be controlled by session/auth state -->
                <li class="nav-item" id="navDashboard" <?php if(!isset($showLoggedIn)): ?>style="display: none;"<?php endif; ?>>
                    <a class="nav-link <?php echo ($currentPage == 'dashboard.php') ? 'active' : ''; ?>" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item" id="navContact" <?php if(!isset($showLoggedIn)): ?>style="display: none;"<?php endif; ?>>
                    <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a>
                </li>
                <li class="nav-item" id="navLogout" <?php if(!isset($showLoggedIn)): ?>style="display: none;"<?php endif; ?>>
                    <a class="nav-link" href="logout.php" id="logoutLink">Logout</a>
                </li>
                
                <?php if(!isset($showLoggedIn)): ?>
                <li class="nav-item" id="navLogin">
                    <a class="nav-link <?php echo ($currentPage == 'login.php') ? 'active' : ''; ?>" href="login.php">Login</a>
                </li>
                <li class="nav-item" id="navSignup">
                    <a class="nav-link <?php echo ($currentPage == 'signup.php') ? 'active' : ''; ?>" href="signup.php">Sign Up</a>
                </li>
                <?php endif; ?>

                <li class="nav-item ms-lg-3 d-flex align-items-center">
                    <div class="input-group search-group shadow-sm">
                        <input type="text" class="form-control search-input border-end-0" placeholder="Search in InsightU..." aria-label="Search">
                        <button class="btn btn-outline-secondary search-btn bg-white border-start-0" type="button">
                            <i class="bi bi-search text-primary"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
$pageTitle = 'Login';
$extraCss = '<link rel="stylesheet" href="login.css">';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Login Section -->
<section class="login-section">
    <div class="container">
        <div class="login-wrapper">
            <div class="login-card">
                <h1>Login to Your Account</h1>
                <p class="login-subtext">Please enter your credentials to access your account.</p>

                <form id="loginForm" action="auth/login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Enter your email" required>
                        <small class="error-text" id="emailError"></small>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Enter your password" required>
                        <small class="error-text" id="passwordError"></small>
                    </div>

                    <div class="remember-box mb-3">
                        <span class="remember-label">Remember Me</span>
                        <div class="radio-group">
                            <label><input type="radio" name="remember" value="Yes"> Yes</label>
                            <label><input type="radio" name="remember" value="No"> No</label>
                        </div>
                    </div>

                    <div class="login-actions">
                        <a href="#" class="forgot-link" id="forgotPasswordLink">Forgot Password</a>
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
$footerExtra = '<div class="row mt-3">
    <div class="col-12 text-center text-md-start">
        <span class="text-muted small signup-text">Don\'t have an account? <a href="signup.php" class="footer-link fw-bold">Sign Up</a>.</span>
    </div>
</div>';
$extraScripts = '<script src="login.js"></script>';
include 'includes/footer.php'; 
?>
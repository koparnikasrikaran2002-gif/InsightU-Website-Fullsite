<?php
$pageTitle = 'Sign Up';
$extraCss = '<link rel="stylesheet" href="signup.css">';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Signup Section -->
<section class="signup-section">
    <div class="container">
        <div class="signup-wrapper">
            <div class="signup-card">
                <p class="small-title">Student Registration</p>
                <p class="intro-text">Join InsightU and take the first step toward your academic journey.</p>
                <p class="account-text">Already have an account? <a href="login.php">Login</a></p>

                <h1>Create Your Account</h1>
                <p class="signup-subtext">Please fill out the registration form below.</p>

                <form id="signupForm" action="auth/register.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control custom-input" id="fullName" name="name" placeholder="Enter your full name" required>
                            <small class="error-text" id="nameError"></small>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="universityId" class="form-label">University ID</label>
                            <input type="text" class="form-control custom-input" id="universityId" name="university_id" placeholder="Enter your university ID" required>
                            <small class="error-text" id="idError"></small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Enter your email address" required>
                        <small class="error-text" id="emailError"></small>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="faculty" class="form-label">Faculty</label>
                            <select class="form-select custom-input" id="faculty" name="faculty" required>
                                <option value="">Select Faculty</option>
                                <option>Engineering</option>
                                <option>Arts</option>
                                <option>Applied Science</option>
                                <option>Business management</option>
                                <option>Techology</option>
                                <option>Others</option>
                            </select>
                            <small class="error-text" id="facultyError"></small>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="year" class="form-label">Year of Study</label>
                            <select class="form-select custom-input" id="year" name="year_of_study" required>
                                <option value="">Select Year</option>
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                            </select>
                            <small class="error-text" id="yearError"></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Create a password" required>
                            <small class="hint-text">Must be at least 8 characters long</small>
                            <small class="error-text" id="passwordError"></small>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control custom-input" id="confirmPassword" name="confirm_password" placeholder="Re-enter your password" required>
                            <small class="error-text" id="confirmPasswordError"></small>
                        </div>
                    </div>

                    <div class="button-group">
                        <a href="login.php" class="back-link">Back to Login</a>
                        <button type="submit" class="signup-btn">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 
$extraScripts = '<script src="signup.js"></script>';
include 'includes/footer.php'; 
?>
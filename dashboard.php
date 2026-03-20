<?php
$pageTitle = 'Dashboard';
$extraCss = '<link rel="stylesheet" href="dashboard.css">';
include 'includes/header.php';

$showLoggedIn = true;
include 'includes/navbar.php';
?>

<div class="dashboard-layout">
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="main-content">

        <!-- Welcome Section (Carousel) -->
        <section class="welcome-section mb-2">
            <div id="welcomeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-indicators" style="bottom: -15px;">
                    <button type="button" data-bs-target="#welcomeCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#welcomeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#welcomeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner shadow-sm" style="border-radius: 22px;">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="welcome-card slide-1">
                            <div style="max-width: 60%;">
                                <h1>Welcome back, Student!</h1>
                                <p>Here is your academic overview and daily progress in one place. Keep up the great work this semester!</p>
                                <button class="main-btn mt-4" id="motivateBtn">Continue Learning</button>
                            </div>
                            <div class="welcome-image-wrapper d-none d-md-block">
                                <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=400&auto=format&fit=crop"
                                    alt="Student Studying">
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="welcome-card slide-2">
                            <div style="max-width: 60%;">
                                <h1>Discover New Passion</h1>
                                <p>Explore our library of over 500+ interactive courses. From data science to creative writing, there is something for everyone.</p>
                                <button class="main-btn mt-4">Explore Courses</button>
                            </div>
                            <div class="welcome-image-wrapper d-none d-md-block">
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=400&auto=format&fit=crop"
                                    alt="Students exploring">
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="welcome-card slide-3">
                            <div style="max-width: 60%;">
                                <h1>Ace Your Exams</h1>
                                <p>Check out the newly uploaded peer-reviewed study materials and join study groups to supercharge your grades.</p>
                                <button class="main-btn mt-4">Find Resources</button>
                            </div>
                            <div class="welcome-image-wrapper d-none d-md-block">
                                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=400&auto=format&fit=crop"
                                    alt="Studying resources">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Optional Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="prev"
                    style="width: 5%;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"
                        style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.5));"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="next"
                    style="width: 5%;">
                    <span class="carousel-control-next-icon" aria-hidden="true"
                        style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.5));"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Stats Cards Section (Summary) -->
        <section class="statistics-section mb-4">
            <h2 class="section-title text-center mb-4">Quick Stats</h2>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-mortarboard-fill"></i></div>
                    <h3 id="gpaValue">3.8</h3>
                    <p>Current GPA</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-journal-check"></i></div>
                    <h3 id="goalValue">10</h3>
                    <p>Completed Assignments</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-list-task"></i></div>
                    <h3>3</h3>
                    <p>Pending Tasks</p>
                </div>

                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-clock-history"></i></div>
                    <h3>25 hrs</h3>
                    <p>Study Hours</p>
                </div>
            </div>
        </section>

        <!-- Motivational Quotes Section -->
        <section class="motivation-section mt-5">
            <h2 class="section-title text-center mb-4">Motivational Quotes</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-5">
                    <div class="content-card h-100 d-flex align-items-center gap-3 quote-mini">
                        <div class="quote-thumb"><i class="bi bi-lightning-fill"></i></div>
                        <div>
                            <h5 class="mb-1">Believe you can!</h5>
                            <p class="text-muted small mb-0">The journey of a thousand miles begins with one step.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="content-card h-100 d-flex align-items-center gap-3 quote-mini">
                        <div class="quote-thumb"><i class="bi bi-person-walking"></i></div>
                        <div>
                            <h5 class="mb-1">Stay focused!</h5>
                            <p class="text-muted small mb-0">Don't watch the clock; do what it does. Keep going.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php 
$footerClass = 'mt-4';
$extraScripts = '<script src="dashboard.js"></script>';
include 'includes/footer.php'; 
?>

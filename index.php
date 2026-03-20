<?php
$pageTitle = 'Home';
$extraCss = '<link rel="stylesheet" href="index.css">';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="container-fluid main-wrapper px-4">
    <section class="hero-section">
        <div class="hero-left">
            <h1>Welcome to InsightU!</h1>
            <p>Your one-stop portal for all academic needs.</p>
            <button class="black-btn" id="getStartedBtn">Get Started</button>
        </div>

        <div class="hero-right">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop"
                alt="Students studying together" class="hero-image">
        </div>
    </section>

    <section class="features-section">
        <div class="features-left">
            <h2>Features</h2>
            <p>Explore our amazing features designed just for you!</p>
            <button class="black-btn" id="learnMoreBtn">Learn More</button>
        </div>

        <div class="features-right">
            <div class="feature-card">
                <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=400&auto=format&fit=crop"
                    alt="Share Study Materials" class="feature-image">
                <small>New</small>
                <h3>Share Study Materials</h3>
                <p>Collaborate and share your resources easily.</p>
            </div>

            <div class="feature-card">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=400&auto=format&fit=crop"
                    alt="Student Discussions" class="feature-image">
                <small>Popular</small>
                <h3>Student Discussions</h3>
                <p>Engage in meaningful conversations.</p>
            </div>

            <div class="feature-card">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=400&auto=format&fit=crop"
                    alt="Academic Announcements" class="feature-image">
                <small>Important</small>
                <h3>Academic Announcements</h3>
                <p>Stay updated with the latest news.</p>
            </div>

            <div class="feature-card">
                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=400&auto=format&fit=crop"
                    alt="Peer Mentoring" class="feature-image">
                <small>Helpful</small>
                <h3>Peer Mentoring</h3>
                <p>Get help from fellow students.</p>
            </div>
        </div>
    </section>
</main>

<?php 
$extraScripts = '<script src="index.js"></script>';
include 'includes/footer.php'; 
?>
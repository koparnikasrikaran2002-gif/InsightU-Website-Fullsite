<?php
$pageTitle = 'Profile';
$extraCss = '<link rel="stylesheet" href="dashboard.css">';
include 'includes/header.php';

$showLoggedIn = true;
include 'includes/navbar.php';
?>

<div class="dashboard-layout">
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="main-content">

        <!-- Academic Statistics Section -->
        <section class="statistics-section mb-5">
            <h2 class="section-title text-center mb-5">Academic Statistics</h2>
            
            <div class="content-card mb-4 chart-container">
                <h3>GPA Progress</h3>
                <div class="chart-wrapper">
                    <canvas id="gpaChart"></canvas>
                </div>
                <p class="text-muted small text-end mt-2">Weeks</p>
            </div>
        </section>

        <!-- Subject Marks Overview Section -->
        <section class="marks-section mb-4">
            <h2 class="section-title text-center mb-5">Subject Marks Overview</h2>
            
            <div class="content-card chart-container">
                <h3>Marks by Subject</h3>
                <div class="chart-wrapper">
                    <canvas id="marksChart"></canvas>
                </div>
                <p class="text-muted small text-end mt-2">Subjects</p>
            </div>
        </section>

    </main>
</div>

<?php 
$footerClass = 'mt-5';
$extraScripts = '
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="profile.js"></script>';
include 'includes/footer.php'; 
?>


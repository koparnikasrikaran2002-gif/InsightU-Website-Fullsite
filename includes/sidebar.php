<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<aside class="sidebar">
    <div class="sidebar-title">Menu</div>
    <a href="dashboard.php" class="sidebar-link <?php echo ($currentPage == 'dashboard.php') ? 'active' : ''; ?>">
        <i class="bi bi-house-door-fill"></i> Overview
    </a>
    <a href="profile.php" class="sidebar-link <?php echo ($currentPage == 'profile.php') ? 'active' : ''; ?>">
        <i class="bi bi-person-fill"></i> Profile
    </a>
    <a href="#" class="sidebar-link"><i class="bi bi-bar-chart-line-fill"></i> Academic Progress</a>
    <a href="#" class="sidebar-link"><i class="bi bi-check2-square"></i> Tasks</a>
    <a href="#" class="sidebar-link"><i class="bi bi-bullseye"></i> Goals</a>
    <a href="#" class="sidebar-link"><i class="bi bi-bell-fill"></i> Notifications</a>
</aside>

<footer class="site-footer <?php echo $footerClass ?? ''; ?>">
    <div class="container-fluid px-4">
        <div class="row align-items-center">
            <!-- Left: Logo & Copyright -->
            <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                <a href="index.php" class="footer-brand d-inline-flex align-items-center mb-2">
                    <img src="Logo 250px.png" alt="InsightU Logo" class="footer-logo">
                </a>
                <p class="text-muted small mb-0">&copy; 2026 InsightU. All rights reserved.</p>
            </div>

            <!-- Center: Links -->
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <div class="d-flex flex-column align-items-center">
                    <a href="mailto:support@insightu.edu" class="footer-link mb-2"><i class="bi bi-envelope-fill me-2"></i>support@insightu.edu</a>
                    <a href="tel:1234567890" class="footer-link"><i class="bi bi-telephone-fill me-2"></i>(123) 456-7890</a>
                </div>
            </div>

            <!-- Right: Social Icons -->
            <div class="col-md-4">
                <p class="text-muted small text-center text-md-end mb-2 d-none d-md-block">Follow us</p>
                <div class="social-icons">
                    <a href="#" class="social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <?php if (isset($footerExtra)): echo $footerExtra; endif; ?>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>window.addEventListener('load', function () { document.getElementById('page-loader').classList.add('hidden'); });</script>
<?php if (isset($extraScripts)): echo $extraScripts; endif; ?>
</body>
</html>

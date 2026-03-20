<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $subject = sanitize_input($_POST['subject'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        redirect_with_message('contact.php', 'danger', 'Please fill in all contact form fields.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirect_with_message('contact.php', 'danger', 'Please enter a valid email address.');
    }

    $sql = 'INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $name, $email, $subject, $message);

    if (!$stmt->execute()) {
        redirect_with_message('contact.php', 'danger', 'Message could not be saved.');
    }

    redirect_with_message('contact.php', 'success', 'Your message was sent successfully.');
}

$pageTitle = 'Contact';
$extraCss = '<link rel="stylesheet" href="contact.css">';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="contact-section">
    <div class="container">
        <?php echo flash_message(); ?>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-5">
                <div class="info-card h-100">
                    <p class="small-title">Get in Touch</p>
                    <h1>Contact InsightU</h1>
                    <p class="intro-text">
                        We are here to support your academic journey. Feel free to contact us
                        for help, questions, or feedback about the InsightU platform.
                    </p>

                    <div class="contact-item">
                        <div class="icon-box"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <h5>Email</h5>
                            <p>support@insightu.edu</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="icon-box"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <h5>Phone</h5>
                            <p>(123) 456-7890</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="icon-box"><i class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <h5>Address</h5>
                            <p>InsightU Student Support Center, University of Rajarata, Mihintale.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="form-card h-100">
                    <h2>Send Us a Message</h2>
                    <p class="form-subtext">Please fill in the form below and we will get back to you soon.</p>

                    <form id="contactForm" method="POST" action="contact.php" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control custom-input" id="fullName" name="name" placeholder="Enter your full name" required>
                                <small class="error-text" id="nameError"></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Enter your email" required>
                                <small class="error-text" id="emailError"></small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control custom-input" id="subject" name="subject" placeholder="Enter subject" required>
                            <small class="error-text" id="subjectError"></small>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control custom-input textarea-box" id="message" name="message" rows="5" placeholder="Write your message" required></textarea>
                            <small class="error-text" id="messageError"></small>
                        </div>

                        <div class="button-wrap">
                            <button type="submit" class="send-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$extraScripts = '<script src="contact.js"></script>';
include 'includes/footer.php';
?>
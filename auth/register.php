<?php
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $university_id = trim($_POST['university_id']);
    $email = trim($_POST['email']);
    $faculty = trim($_POST['faculty']);
    $year_of_study = trim($_POST['year_of_study']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($name) || empty($university_id) || empty($email) || empty($faculty) || empty($year_of_study) || empty($password)) {
        die("All fields are required.");
    }

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    $checkSql = "SELECT id FROM users WHERE email = ? OR university_id = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("ss", $email, $university_id);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        die("Email or University ID already exists.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, university_id, email, faculty, year_of_study, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $university_id, $email, $faculty, $year_of_study, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: ../login.php");
        exit();
    } else {
        echo "Registration failed.";
    }
}
?>
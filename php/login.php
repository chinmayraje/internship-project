<?php
// login.php
session_start();
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if user exists and get user info
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Successful login
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on role
        if ($user['role'] == 'hod') {
            header('Location: ../pages/hod_portal.php');
        } elseif ($user['role'] == 'admin') {
            header('Location: ../pages/admin_portal.php');
        } elseif ($user['role'] == 'faculty') {
            header('Location: ../pages/faculty_portal.php');
        } elseif ($user['role'] == 'student') {
            if ($user['courses_assigned']) {
                header('Location: ../pages/student_portal.php');
            } else {
                header('Location: ../pages/error.php?msg=You have not been assigned any courses. Please contact the admin.');
            }
        }
    } else {
        // Invalid login
        header('Location: ../pages/error.php?msg=Invalid email or password.');
    }
}
?>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Format email tidak valid!";
        header("Location: login.php");
        exit();
    }

    $parts = explode('@', $email);
    $domain = end($parts); 

    if ($password === $domain) {
        $_SESSION['email'] = $email;
        
        header("Location: form.php");
        exit();
    } else {
        $_SESSION['error'] = "Email atau password salah!";
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>

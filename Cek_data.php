<?php
session_start();
include 'koneksi.php'; // Pastikan koneksi database benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php"); // Redirect ke dashboard
            exit();
        } else {
            $_SESSION['error_message'] = "Password salah!";
            header("Location: Login_admin.php"); // Redirect kembali ke halaman login
            exit();
        }
    } else {
        $_SESSION['error_message'] = "Username tidak ditemukan!";
        header("Location: Login_admin.php");
        exit();
    }
}
?>

<?php
$host = "localhost"; // Sesuaikan dengan server database
$user = "root"; // Ganti sesuai user database
$password = ""; // Ganti sesuai password database
$database = "Kelola_Akun_Admin";

$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
else{
    
}
?>

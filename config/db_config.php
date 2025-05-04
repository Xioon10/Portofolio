<?php
// Konfigurasi database
$host = "localhost"; // Host database
$username = "root"; // Username database
$password = ""; // Password database
$database = "portfolio_db"; // Nama database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Set karakter encoding ke UTF-8
mysqli_set_charset($conn, "utf8");
?>
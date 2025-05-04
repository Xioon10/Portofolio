<?php
// Sertakan file konfigurasi database
require_once '../config/db_config.php';

// Inisialisasi respons
$response = array(
    'success' => false,
    'message' => ''
);

// Periksa apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form dan melakukan sanitasi
    $nama = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telepon = mysqli_real_escape_string($conn, $_POST['phone']);
    $pesan = mysqli_real_escape_string($conn, $_POST['message']);

    // Validasi data
    $errors = [];
    
    // Validasi nama
    if (empty($nama)) {
        $errors[] = "Nama tidak boleh kosong";
    }
    
    // Validasi email
    if (empty($email)) {
        $errors[] = "Email tidak boleh kosong";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }
    
    // Validasi telepon
    if (empty($telepon)) {
        $errors[] = "Nomor telepon tidak boleh kosong";
    } elseif (!preg_match("/^[0-9]{10,15}$/", $telepon)) {
        $errors[] = "Nomor telepon harus berupa angka (10-15 digit)";
    }
    
    // Validasi pesan
    if (empty($pesan)) {
        $errors[] = "Pesan tidak boleh kosong";
    }
    
    // Jika tidak ada error, lakukan penyimpanan ke database
    if (empty($errors)) {
        // Query SQL untuk menyimpan data ke database
        $sql = "INSERT INTO kontak (nama, email, telepon, pesan) VALUES ('$nama', '$email', '$telepon', '$pesan')";
        
        if (mysqli_query($conn, $sql)) {
            $response['success'] = true;
            $response['message'] = "Pesan berhasil dikirim!";
        } else {
            $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        $response['message'] = implode("<br>", $errors);
    }
}

// Mengembalikan response dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
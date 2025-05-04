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
    $artikel_id = mysqli_real_escape_string($conn, $_POST['artikel_id']);
    $nama = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $komentar = mysqli_real_escape_string($conn, $_POST['comment']);

    // Validasi data
    $errors = [];
    
    // Validasi artikel ID
    if (empty($artikel_id) || !is_numeric($artikel_id)) {
        $errors[] = "ID artikel tidak valid";
    }
    
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
    
    // Validasi komentar
    if (empty($komentar)) {
        $errors[] = "Komentar tidak boleh kosong";
    }
    
    // Jika tidak ada error, lakukan penyimpanan ke database
    if (empty($errors)) {
        // Query SQL untuk menyimpan data ke database
        $sql = "INSERT INTO komentar (artikel_id, nama, email, komentar) 
                VALUES ('$artikel_id', '$nama', '$email', '$komentar')";
        
        if (mysqli_query($conn, $sql)) {
            $response['success'] = true;
            $response['message'] = "Komentar berhasil dikirim!";
            
            // Mendapatkan data komentar yang baru saja dimasukkan
            $id = mysqli_insert_id($conn);
            $query = "SELECT * FROM komentar WHERE id = $id";
            $result = mysqli_query($conn, $query);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $komentar_data = mysqli_fetch_assoc($result);
                $response['data'] = array(
                    'id' => $komentar_data['id'],
                    'nama' => $komentar_data['nama'],
                    'komentar' => $komentar_data['komentar'],
                    'tanggal' => date('d M Y', strtotime($komentar_data['tanggal_kirim']))
                );
            }
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
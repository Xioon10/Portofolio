<?php
// konfigurasi database
require_once '../config/db_config.php';

// Dapatkan artikel_id dari parameter URL
$artikel_id = isset($_GET['artikel_id']) ? (int)$_GET['artikel_id'] : 1;

// Query untuk mengambil semua komentar untuk artikel ini
$sql = "SELECT * FROM komentar WHERE artikel_id = $artikel_id ORDER BY tanggal_kirim DESC";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Format tanggal
        $tanggal = date('d M Y', strtotime($row['tanggal_kirim']));
        // Inisial untuk avatar (huruf pertama dari nama)
        $inisial = strtoupper(substr($row['nama'], 0, 1));
        
        // Tampilkan komentar
        echo '<div class="d-flex mb-3 p-3 bg-white rounded shadow-sm">
            <div class="flex-shrink-0">
                <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 45px; height: 45px;">
                    <span class="fw-bold">' . $inisial . '</span>
                </div>
            </div>
            <div class="ms-3">
                <h6 class="fw-bold mb-1">' . htmlspecialchars($row['nama']) . '</h6>
                <p class="mb-1">' . htmlspecialchars($row['komentar']) . '</p>
                <small class="text-muted">' . $tanggal . '</small>
            </div>
        </div>';
    }
} else {
    echo '<div class="alert alert-light">Belum ada komentar. Jadilah yang pertama berkomentar!</div>';
}
?>
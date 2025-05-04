<?php
// Inisialisasi variabel artikel_id di awal file
$artikel_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../asset/css/styles.css">
  <link rel="stylesheet" href="../asset/css/styles_navbar.css">
  <link rel="stylesheet" href="../asset/css/styles_footer.css">
  <title>Artikel - Cara Meningkatkan Performa Website</title>
  <style>
    .comments-container {
      max-height: 350px;
      overflow-y: auto;
      margin-bottom: 20px;
      padding-right: 5px;
      border: 1px solid #eee;
      border-radius: 6px;
      background-color: #f8f9fa;
    }
    
    .comments-container::-webkit-scrollbar {
      width: 6px;
    }
    
    .comments-container::-webkit-scrollbar-thumb {
      background-color: #c1c1c1;
      border-radius: 10px;
    }
    
    .comments-container::-webkit-scrollbar-track {
      background-color: #f1f1f1;
      border-radius: 10px;
    }
    
    .comment-divider {
      margin-top: 20px;
      margin-bottom: 20px;
      border-top: 1px solid #eee;
    }

    /* Style untuk highlight komentar baru */
    @keyframes highlightComment {
      0% { background-color: #e3f2fd; }
      70% { background-color: #e3f2fd; }
      100% { background-color: white; }
    }
    
    .comment-highlight {
      animation: highlightComment 2s ease-in-out;
    }

    /* ID untuk anchor komentar */
    #comments-section {
      scroll-margin-top: 100px;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header" id="header">
    <nav class="nav container">
        <a href="../index.html" class="nav_logo">Arie</a>

        <div class="nav_menu" id="nav-menu">
            <ul class="nav_list grid">
                <li class="nav_item">
                    <a href="../index.html#home" class="nav_link">
                        <i class="uil uil-home nav_icon"></i> Beranda
                    </a>
                </li>
                <li class="nav_item">
                    <a href="../index.html#about" class="nav_link">
                        <i class="uil uil-user-circle nav_icon"></i> Tentang
                    </a>
                </li>
                <li class="nav_item">
                    <a href="../index.html#skills" class="nav_link">
                        <i class="uil uil-cog nav_icon"></i> Skill
                    </a>
                </li>
                <li class="nav_item">
                    <a href="../index.html#keunggulan" class="nav_link">
                        <i class="uil uil-medal nav_icon"></i> Keunggulan
                    </a>
                </li>
                <li class="nav_item">
                    <a href="../index.html#portofolio" class="nav_link">
                        <i class="uil uil-server nav_icon"></i> Portofolio
                    </a>
                </li>
                <li class="nav_item">
                    <a href="../index.html#testimoni" class="nav_link">
                        <i class="uil uil-comment-alt-dots nav_icon"></i> Testimoni
                    </a>
                </li>
                <li class="nav_item">
                    <a href="../index.html#kontak" class="nav_link">
                        <i class="uil uil-phone nav_icon"></i> Kontak
                    </a>
                </li>
                <li class="nav_item">
                  <a href="blog.html" class="nav_link">
                      <i class="uil uil-document-layout-left nav_icon"></i> Blog
                  </a>
              </li>
              <li class="nav_item">
                  <a href="artikel.php" class="nav_link active-link">
                      <i class="uil uil-newspaper nav_icon"></i> Artikel
                  </a>
              </li>
            </ul>
            <i class="uil uil-times nav_close" id="nav-close"></i>
        </div>

        <div class="nav_btns">
            <div class="nav_toggle" id="nav-toggle">
                <i class="uil uil-list-ul"></i>
            </div>
        </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="py-5" style="margin-top: var(--header-height);">
    <div class="container">
      <!-- Artikel Header -->
      <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
          <span class="badge bg-primary mb-2">Pengembangan Web</span>
          <!-- Judul artikel berdasarkan artikel yang ditampilkan -->
          <h1 class="fw-bold display-5 mb-2">Cara Meningkatkan Performa Website dengan Optimasi CSS & JavaScript</h1>
          <div class="d-flex justify-content-center align-items-center text-muted mb-3">
            <span class="me-3"><i class="uil uil-calendar-alt"></i> 23 April 2025</span>
            <span class="me-3"><i class="uil uil-clock"></i> 10 menit membaca</span>
            <span><i class="uil uil-user"></i> Arie Afriza</span>
          </div>
          <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80" alt="Web Development" class="img-fluid rounded shadow-sm mb-4 w-100" style="max-height: 400px; object-fit: cover;">
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-8">
          <!-- Artikel Content -->
          <div class="bg-white rounded shadow-sm p-4 mb-4">
            <!-- Artikel 1 - Ditampilkan secara default -->
            <article id="artikel-1" class="artikel-content">
              <p class="lead">Website yang lambat dapat membuat pengguna frustrasi dan meningkatkan bounce rate. Oleh karena itu, optimasi frontend sangat penting.</p>
              <h5 class="mt-4 mb-3 fw-bold">Langkah-Langkah Optimasi:</h5>
              <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent"><i class="uil uil-check-circle text-success me-2"></i> <strong>Minifikasi CSS & JavaScript:</strong> Gunakan tools seperti UglifyJS atau Terser untuk memperkecil ukuran file.</li>
                <li class="list-group-item bg-transparent"><i class="uil uil-check-circle text-success me-2"></i> <strong>Lazy Loading:</strong> Gunakan <code>loading="lazy"</code> pada elemen <code>&lt;img&gt;</code>.</li>
                <li class="list-group-item bg-transparent"><i class="uil uil-check-circle text-success me-2"></i> <strong>Mengurangi HTTP Requests:</strong> Gabungkan file CSS atau JS untuk mengurangi permintaan ke server.</li>
                <li class="list-group-item bg-transparent"><i class="uil uil-check-circle text-success me-2"></i> <strong>Gunakan CDN:</strong> Akses file dari server terdekat agar loading lebih cepat.</li>
              </ul>
              <div class="alert alert-info">
                <i class="uil uil-info-circle me-2"></i> Dengan teknik ini, kecepatan website meningkat, pengalaman pengguna lebih baik, dan SEO juga naik.
              </div>
            </article>

            <!-- Artikel 2 - Disembunyikan secara default -->
            <article id="artikel-2" class="artikel-content d-none">
              <p class="lead">REST API adalah standar komunikasi antara frontend dan backend.</p>
              
              <div class="row mb-4">
                <div class="col-md-6">
                  <h5 class="mt-4 mb-3 fw-bold">Konsep Dasar:</h5>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="table-light">
                        <tr>
                          <th>Metode</th>
                          <th>Fungsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code>GET</code></td>
                          <td>Mengambil data</td>
                        </tr>
                        <tr>
                          <td><code>POST</code></td>
                          <td>Menambahkan data</td>
                        </tr>
                        <tr>
                          <td><code>PUT</code></td>
                          <td>Mengupdate data</td>
                        </tr>
                        <tr>
                          <td><code>DELETE</code></td>
                          <td>Menghapus data</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="REST API" class="img-fluid rounded shadow-sm" style="max-height: 200px; object-fit: cover; width: 100%;">
                </div>
              </div>
              
              <h5 class="mt-4 mb-3 fw-bold">Langkah Implementasi (Node.js + Express.js):</h5>
              <div class="bg-dark text-light p-3 rounded mb-3">
                <pre class="mb-0"><code>npm install express

const express = require('express');
const app = express();
app.get('/api/data', (req, res) => {
  res.json({ message: 'Hello, API!' });
});
app.listen(3000, () => console.log('Server berjalan di port 3000'));</code></pre>
              </div>
              <div class="alert alert-success">
                <i class="uil uil-check-circle me-2"></i> Gunakan <strong>Postman</strong> untuk menguji endpoint API yang Anda buat.
              </div>
            </article>

            <!-- Artikel 3 - Disembunyikan secara default -->
            <article id="artikel-3" class="artikel-content d-none">
              <p class="lead">Pengalaman pengguna yang baik merupakan kunci keberhasilan sebuah website atau aplikasi.</p>
              
              <div class="row mb-4">
                <div class="col-md-6">
                  <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                      <h5 class="card-title"><i class="uil uil-eye text-info me-2"></i> Keterbacaan & Kontras yang Baik</h5>
                      <p class="card-text">Gunakan warna yang kontras antara teks dan background untuk memudahkan pembacaan konten website.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                      <h5 class="card-title"><i class="uil uil-layer-group text-info me-2"></i> Penggunaan Spasi yang Tepat</h5>
                      <p class="card-text">Hindari tampilan yang terlalu padat agar pengguna lebih nyaman membaca konten website Anda.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                      <h5 class="card-title"><i class="uil uil-react text-info me-2"></i> Feedback Visual</h5>
                      <p class="card-text">Gunakan efek hover atau animasi kecil sebagai respons visual untuk interaksi pengguna.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                      <h5 class="card-title"><i class="uil uil-mobile-android text-info me-2"></i> Responsif untuk Semua Perangkat</h5>
                      <p class="card-text">Pastikan tampilan website baik di desktop, tablet, maupun smartphone.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="alert alert-info mt-4">
                <i class="uil uil-info-circle me-2"></i> <strong>Tips:</strong> Uji desain Anda pada pengguna nyata sebelum meluncurkan produk final.
              </div>
            </article>

            <!-- Artikel 4 - Disembunyikan secara default -->
            <article id="artikel-4" class="artikel-content d-none">
              <p class="lead">Struktur kode yang baik penting untuk kolaborasi tim dan pengembangan jangka panjang.</p>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="card bg-light mb-3">
                    <div class="card-header fw-bold">Penamaan yang Konsisten</div>
                    <div class="card-body">
                      <p class="card-text">Gunakan nama fungsi seperti <code>getUserData()</code>, hindari <code>getuserdata()</code></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card bg-light mb-3">
                    <div class="card-header fw-bold">Modularisasi</div>
                    <div class="card-body">
                      <p class="card-text">Gunakan struktur folder seperti <code>/controllers</code>, <code>/models</code>, <code>/routes</code></p>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="alert alert-primary mt-3">
                <strong><i class="uil uil-github me-2"></i> Tip:</strong> Gunakan Git untuk memantau dan mengelola perubahan pada kode Anda.
              </div>
              
              <div class="card border-primary mt-4">
                <div class="card-header bg-primary text-white">
                  <i class="uil uil-lightbulb-alt me-2"></i> Kesimpulan
                </div>
                <div class="card-body">
                  <p class="card-text">Dengan struktur yang rapi, kode lebih mudah dipahami dan dipelihara oleh seluruh anggota tim. Ini sangat penting dalam pengembangan jangka panjang untuk menghindari technical debt.</p>
                </div>
              </div>
            </article>

            <!-- Navigasi Artikel -->
            <div class="d-flex justify-content-between mb-4 mt-5">
              <button id="prev-artikel" class="btn btn-outline-primary" data-current="1">
                <i class="uil uil-arrow-left me-1"></i> Artikel Sebelumnya
              </button>
              <button id="next-artikel" class="btn btn-outline-primary" data-current="1">
                Artikel Selanjutnya <i class="uil uil-arrow-right ms-1"></i>
              </button>
            </div>

            <!-- Area Komentar -->
            <div id="comments-section" class="p-4 border rounded bg-light mt-5">
              <h4 class="fw-bold mb-3"><i class="uil uil-comment-alt-lines me-2"></i>Komentar</h4>
              
              <!-- Bagian daftar komentar yang bisa di-scroll -->
              <div class="comments-container p-3 mb-4">
                <div id="comments-list">
                  <?php
                  // Sertakan file konfigurasi database
                  require_once '../config/db_config.php';
                  
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
                </div>
              </div>

              <div class="comment-divider"></div>

              <!-- Form komentar yang tetap diam -->
              <h5 class="fw-bold mb-3">Tinggalkan Komentar</h5>
              <form id="commentForm">
                <input type="hidden" id="artikel_id" name="artikel_id" value="<?php echo $artikel_id; ?>">
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                  <div id="nameError" class="error-message text-danger mt-1"></div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                  <div id="emailError" class="error-message text-danger mt-1"></div>
                </div>
                <div class="mb-3">
                  <label for="comment" class="form-label">Komentar</label>
                  <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                  <div id="commentError" class="error-message text-danger mt-1"></div>
                </div>
                <button type="submit" class="btn btn-primary" id="submitCommentBtn">
                  <i class="uil uil-message me-1"></i> Kirim Komentar
                </button>
                <div id="commentFormResponse" class="mt-3"></div>
              </form>
            </div>
          </div>
        </div>
        
        <!-- Sidebar Tentang -->
        <div class="col-lg-4">
          <div class="bg-white rounded shadow-sm p-4 mb-4">
            <h4 class="fw-bold mb-3 border-bottom pb-2"><i class="uil uil-user me-2"></i>Tentang Penulis</h4>
            <div class="text-center mb-3">
              <div class="mx-auto rounded-circle bg-light d-flex justify-content-center align-items-center mb-3" style="width: 100px; height: 100px;">
                <i class="uil uil-user-circle" style="font-size: 60px;"></i>
              </div>
              <h5 class="fw-bold">Arie Afriza</h5>
              <p class="text-muted">Frontend Developer</p>
            </div>
            <p>Frontend Developer yang berfokus pada pengembangan website dengan UI/UX yang menarik dan responsif.</p>
            <div class="d-flex justify-content-center">
              <a href="https://github.com/Xioon10" class="btn btn-sm btn-outline-dark mx-1" target="_blank"><i class="uil uil-github"></i></a>
              <a href="https://www.linkedin.com/in/arie-afriza-771837351/" class="btn btn-sm btn-outline-dark mx-1" target="_blank"><i class="uil uil-linkedin"></i></a>
              <a href="https://www.instagram.com/rieafrzan?igsh=N2VkaXU3Zm56OWxt" class="btn btn-sm btn-outline-dark mx-1" target="_blank"><i class="uil uil-instagram"></i></a>
            </div>
          </div>
          
          <div class="bg-white rounded shadow-sm p-4 mb-4">
            <h4 class="fw-bold mb-3 border-bottom pb-2"><i class="uil uil-search me-2"></i>Pencarian</h4>
            <div class="input-group">
              <input type="text" class="form-control" id="searchInput" placeholder="Cari artikel..." aria-label="Cari artikel">
              <button class="btn btn-primary" type="button" id="searchButton">
                <i class="uil uil-search"></i>
              </button>
            </div>
            <!-- Hasil pencarian -->
            <div id="searchResults" class="mt-3" style="display: none;">
              <h6 class="border-bottom pb-2">Hasil Pencarian:</h6>
              <div id="resultsContainer"></div>
            </div>
          </div>
          
          <div class="bg-white rounded shadow-sm p-4 mb-4">
            <h4 class="fw-bold mb-3 border-bottom pb-2"><i class="uil uil-notebooks me-2"></i>Daftar Artikel</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">
                <a href="#" class="text-decoration-none text-dark artikel-link" data-artikel="1">
                  <i class="uil uil-arrow-right text-primary me-2"></i>Cara Meningkatkan Performa Website
                </a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">
                <a href="#" class="text-decoration-none text-dark artikel-link" data-artikel="2">
                  <i class="uil uil-arrow-right text-primary me-2"></i>Mengenal REST API
                </a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">
                <a href="#" class="text-decoration-none text-dark artikel-link" data-artikel="3">
                  <i class="uil uil-arrow-right text-primary me-2"></i>Prinsip Dasar UI/UX
                </a>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0">
                <a href="#" class="text-decoration-none text-dark artikel-link" data-artikel="4">
                  <i class="uil uil-arrow-right text-primary me-2"></i>Struktur Kode yang Rapi
                </a>
              </li>
            </ul>
          </div>
          
          <div class="bg-white rounded shadow-sm p-4">
            <h4 class="fw-bold mb-3 border-bottom pb-2"><i class="uil uil-file-bookmark-alt me-2"></i>Artikel Populer</h4>
            <div class="mb-3">
              <div class="row g-0">
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1573867639040-6dd25fa5f597?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" class="img-fluid rounded" alt="Artikel Populer">
                </div>
                <div class="col-8">
                  <div class="card-body py-0 ps-3">
                    <h6 class="card-title"><a href="#" class="text-decoration-none text-dark">Mengapa Aksesibilitas Web Itu Penting?</a></h6>
                    <small class="text-muted"><i class="uil uil-calendar-alt"></i> 15 April 2025</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <div class="row g-0">
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1517292987719-0369a794ec0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" class="img-fluid rounded" alt="Artikel Populer">
                </div>
                <div class="col-8">
                  <div class="card-body py-0 ps-3">
                    <h6 class="card-title"><a href="#" class="text-decoration-none text-dark">Cara Membuat Form yang User Friendly</a></h6>
                    <small class="text-muted"><i class="uil uil-calendar-alt"></i> 10 April 2025</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <div class="row g-0">
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" class="img-fluid rounded" alt="Artikel Populer">
                </div>
                <div class="col-8">
                  <div class="card-body py-0 ps-3">
                    <h6 class="card-title"><a href="#" class="text-decoration-none text-dark">Mengenal React Hook untuk Pemula</a></h6>
                    <small class="text-muted"><i class="uil uil-calendar-alt"></i> 5 April 2025</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer_bg">
        <div class="footer_container container">
            <div class="footer_info">
                <!-- About -->
                <div class="footer_group">
                    <h3 class="footer_group-title">Tentang Saya</h3>
                    <p>Frontend Developer yang berfokus pada pengembangan website dengan UI/UX yang menarik dan responsif.</p>
                    <div class="footer_social-container">
                        <a href="https://github.com/Xioon10" target="_blank" class="footer_social">
                            <i class="uil uil-github-alt"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/arie-afriza-771837351/" target="_blank" class="footer_social">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://www.instagram.com/rieafrzan" target="_blank" class="footer_social">
                            <i class="uil uil-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer_group">
                    <h3 class="footer_group-title">Menu Utama</h3>
                    <ul class="footer_links">
                        <li><a href="../index.html#home" class="footer_link"><i class="uil uil-home"></i> Beranda</a></li>
                        <li><a href="../index.html#about" class="footer_link"><i class="uil uil-user-circle"></i> Tentang</a></li>
                        <li><a href="../index.html#skills" class="footer_link"><i class="uil uil-cog"></i> Skill</a></li>
                        <li><a href="../index.html#portofolio" class="footer_link"><i class="uil uil-server"></i> Portofolio</a></li>
                        <li><a href="../index.html#kontak" class="footer_link"><i class="uil uil-phone"></i> Kontak</a></li>
                        <li><a href="blog.html" class="footer_link"><i class="uil uil-document-layout-left"></i> Blog</a></li>
                        <li><a href="artikel.php" class="footer_link"><i class="uil uil-newspaper"></i> Artikel</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="footer_group">
                    <h3 class="footer_group-title">Kontak</h3>
                    <div class="footer_contact">
                        <p><i class="uil uil-phone"></i>081235647</p>
                        <p><i class="uil uil-envelope"></i>arieafriza09@gmail.com</p>
                        <p><i class="uil uil-map-marker"></i>Tasikmalaya, Indonesia</p>
                    </div>
                </div>

                <div class="footer_group">
                  <h3 class="footer_group-title">Legal</h3>
                  <ul class="footer_links">
                      <li><a href="#" class="footer_link"><i class="uil uil-shield-check"></i>Kebijakan Privasi</a></li>
                      <li><a href="#" class="footer_link"><i class="uil uil-file-contract"></i>Syarat & Ketentuan</a></li>
                      <li><a href="#" class="footer_link"><i class="uil uil-sitemap"></i>Peta Situs</a></li>
                  </ul>
              </div>
            </div>
            
            <p class="footer_copy">&#169; Arie Afriza. All rights reserved 2024</p>
        </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../asset/js/form-validation.js"></script>
  <script>
    /* Navbar Mobile */
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    const navClose = document.getElementById('nav-close');

    /* Menu tampil */
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('show-menu');
        });
    }

    /* Menu hilang */
    if (navClose) {
        navClose.addEventListener('click', () => {
            navMenu.classList.remove('show-menu');
        });
    }

    /* Jika menu item di klik menu akan hilang */
    const navLink = document.querySelectorAll('.nav_link');

    function linkAction() {
        navMenu.classList.remove('show-menu');
    }

    navLink.forEach(n => n.addEventListener('click', linkAction));

    /* Scroll header effect */
    function scrollHeader() {
        const header = document.getElementById('header');
        if (this.scrollY >= 80) {
            header.classList.add('scroll-header');
        } else {
            header.classList.remove('scroll-header');
        }
    }
    window.addEventListener('scroll', scrollHeader);

    /* Artikel Navigation */
    document.addEventListener('DOMContentLoaded', function() {
      // Artikel data - menambahkan konten untuk pencarian
      const artikelData = [
        {
          id: 1,
          title: "Cara Meningkatkan Performa Website dengan Optimasi CSS & JavaScript",
          image: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80",
          content: "Website yang lambat dapat membuat pengguna frustrasi. Minifikasi CSS & JavaScript, Lazy Loading, Mengurangi HTTP Requests, dan Gunakan CDN adalah langkah optimasi penting.",
          tags: ["optimasi", "performa", "frontend", "css", "javascript", "website"]
        },
        {
          id: 2,
          title: "Mengenal REST API dan Cara Implementasi dalam Backend",
          image: "https://images.unsplash.com/photo-1607799279861-4dd421887fb3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
          content: "REST API adalah standar komunikasi antara frontend dan backend. Metode HTTP seperti GET, POST, PUT, dan DELETE digunakan untuk CRUD operations.",
          tags: ["backend", "api", "rest", "express", "node.js", "web development"]
        },
        {
          id: 3,
          title: "Prinsip Dasar UI/UX untuk Meningkatkan Pengalaman Pengguna",
          image: "https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80",
          content: "UI/UX yang baik mencakup keterbacaan & kontras, penggunaan spasi yang tepat, feedback visual, dan responsivitas untuk semua perangkat.",
          tags: ["ui", "ux", "design", "pengalaman pengguna", "interface", "web design"]
        },
        {
          id: 4,
          title: "Membangun Struktur Kode yang Rapi dan Mudah Dipahami",
          image: "https://images.unsplash.com/photo-1516259762381-22954d7d3ad2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1189&q=80",
          content: "Struktur kode yang baik penting untuk kolaborasi tim dan pengembangan jangka panjang. Penamaan konsisten dan modularisasi adalah kuncinya.",
          tags: ["clean code", "struktur", "kode", "modularisasi", "pengembangan", "git"]
        }
      ];

      const prevBtn = document.getElementById('prev-artikel');
      const nextBtn = document.getElementById('next-artikel');
      const artikelLinks = document.querySelectorAll('.artikel-link');
      
      let currentArtikel = 1;
      const totalArtikel = artikelData.length;

      // Update UI
      function updateArtikel(artikelId) {
        // Hide all articles
        document.querySelectorAll('.artikel-content').forEach(artikel => {
          artikel.classList.add('d-none');
        });
        
        // Show selected article
        document.getElementById(`artikel-${artikelId}`).classList.remove('d-none');
        
        // Update page title and header
        document.querySelector('h1.display-5').textContent = artikelData[artikelId-1].title;
        document.title = "Artikel - " + artikelData[artikelId-1].title;
        
        // Update header image
        document.querySelector('.container .row.mb-4 img').src = artikelData[artikelId-1].image;
        
        // Update buttons state
        prevBtn.disabled = (artikelId === 1);
        nextBtn.disabled = (artikelId === totalArtikel);
        
        // Update data-current attributes
        prevBtn.setAttribute('data-current', artikelId);
        nextBtn.setAttribute('data-current', artikelId);
        
        // Update current article id for comments
        document.getElementById('artikel_id').value = artikelId;
        
        // Load comments for this article
        loadComments(artikelId);
        
        // Highlight active article in sidebar
        artikelLinks.forEach(link => {
          if (parseInt(link.getAttribute('data-artikel')) === artikelId) {
            link.classList.add('fw-bold');
            link.classList.add('text-primary');
          } else {
            link.classList.remove('fw-bold');
            link.classList.remove('text-primary');
          }
        });
        
        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
        
        // Update currentArtikel
        currentArtikel = artikelId;
      }

      // Function to load comments for selected article
      function loadComments(artikelId) {
        fetch(`load_comments.php?artikel_id=${artikelId}`)
          .then(response => response.text())
          .then(html => {
            document.getElementById('comments-list').innerHTML = html;
          })
          .catch(error => {
            console.error('Error loading comments:', error);
          });
      }

      // Previous Article
      prevBtn.addEventListener('click', function() {
        const current = parseInt(this.getAttribute('data-current'));
        if (current > 1) {
          updateArtikel(current - 1);
        }
      });

      // Next Article
      nextBtn.addEventListener('click', function() {
        const current = parseInt(this.getAttribute('data-current'));
        if (current < totalArtikel) {
          updateArtikel(current + 1);
        }
      });

      // Sidebar article links
      artikelLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const artikelId = parseInt(this.getAttribute('data-artikel'));
          updateArtikel(artikelId);
        });
      });

      // Initialize
      updateArtikel(1);
      
      // Check if URL has newcomment parameter
      if (window.location.href.includes('newcomment=true')) {
        // Scroll to comments section
        setTimeout(() => {
          document.getElementById('comments-section').scrollIntoView({ behavior: 'smooth' });
          // Highlight the latest comment
          const comments = document.querySelectorAll('#comments-list .bg-white');
          if (comments.length > 0) {
            comments[0].classList.add('comment-highlight');
          }
        }, 500);
        
        // Clean URL
        history.replaceState({}, document.title, window.location.pathname + window.location.search.replace(/[\?&]newcomment=true/, ''));
      }
      
      // Search functionality
      const searchInput = document.getElementById('searchInput');
      const searchButton = document.getElementById('searchButton');
      const searchResults = document.getElementById('searchResults');
      const resultsContainer = document.getElementById('resultsContainer');
      
      function searchArticles(query) {
        // Normalize query (lowercase, trim)
        query = query.toLowerCase().trim();
        
        if (query.length < 2) {
          searchResults.style.display = 'none';
          return;
        }
        
        // Filter articles that match the query
        const results = artikelData.filter(article => {
          const titleMatch = article.title.toLowerCase().includes(query);
          const contentMatch = article.content.toLowerCase().includes(query);
          const tagMatch = article.tags.some(tag => tag.toLowerCase().includes(query));
          return titleMatch || contentMatch || tagMatch;
        });
        
        // Display results
        displaySearchResults(results, query);
      }
      
      function displaySearchResults(results, query) {
        // Clear previous results
        resultsContainer.innerHTML = '';
        
        if (results.length === 0) {
          resultsContainer.innerHTML = `<div class="alert alert-info">Tidak ditemukan artikel dengan kata kunci "${query}".</div>`;
        } else {
          const resultsList = document.createElement('ul');
          resultsList.className = 'list-group';
          
          results.forEach(article => {
            const listItem = document.createElement('li');
            listItem.className = 'list-group-item bg-transparent border-0 px-0 py-2';
            
            listItem.innerHTML = `
              <a href="#" class="text-decoration-none search-result-link" data-artikel="${article.id}">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0" style="width: 60px;">
                    <img src="${article.image}" alt="${article.title}" class="img-fluid rounded">
                  </div>
                  <div class="ms-3">
                    <h6 class="mb-0">${article.title}</h6>
                  </div>
                </div>
              </a>
            `;
            
            resultsList.appendChild(listItem);
          });
          
          resultsContainer.appendChild(resultsList);
          
          // Add event listeners to search results
          document.querySelectorAll('.search-result-link').forEach(link => {
            link.addEventListener('click', function(e) {
              e.preventDefault();
              const artikelId = parseInt(this.getAttribute('data-artikel'));
              updateArtikel(artikelId);
              searchResults.style.display = 'none';
              searchInput.value = '';
            });
          });
        }
        
        // Show results container
        searchResults.style.display = 'block';
      }
      
      // Search button click
      searchButton.addEventListener('click', function() {
        searchArticles(searchInput.value);
      });
      
      // Search on Enter key
      searchInput.addEventListener('keyup', function(e) {
        if (e.key === 'Enter') {
          searchArticles(this.value);
        }
      });
      
      // Live search (optional)
      searchInput.addEventListener('input', function() {
        if (this.value.trim().length >= 2) {
          searchArticles(this.value);
        } else {
          searchResults.style.display = 'none';
        }
      });
    });
  </script>
</body>
</html>
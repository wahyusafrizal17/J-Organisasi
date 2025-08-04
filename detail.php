<?php
// Koneksi database
$conn = mysqli_connect('localhost', 'root', 'WahyuJR17_', 'organisasi');
if (!$conn) die('Koneksi gagal: ' . mysqli_connect_error());

// Ambil ID dari parameter URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Query untuk mengambil data produk berdasarkan ID
$query = "SELECT * FROM produk WHERE id = $id";
$result = mysqli_query($conn, $query);
$produk = mysqli_fetch_assoc($result);

// Jika data tidak ditemukan, redirect ke index
if (!$produk) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Berita - HPBPKI</title>
  <meta name="description" content="Detail berita HIMPUNAN PRODUSEN BENIH PERKEBUNAN BUAH DAN KEHUTANAN INDONESIA (HPBPKI)">
  <meta name="robots" content="noindex, nofollow">
  <!-- Favicons -->
  <link href="https://bootstrapmade.com/content/demo/Devin/assets/img/favicon.png" rel="icon">
  <link href="https://bootstrapmade.com/content/demo/Devin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Questrial:wght@400&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="https://bootstrapmade.com/content/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://bootstrapmade.com/content/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://bootstrapmade.com/content/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="https://bootstrapmade.com/content/demo/Devin/assets/css/main.css" rel="stylesheet">
</head>
<body class="detail-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="logo.png" alt="Logo HPBPKI" style="height:40px; margin-right:10px;">
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="index.php#about">PROFIL PERUSAHAAN</a></li>
          <li><a href="index.php#team" class="active">BERITA</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none fas fa-bars"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <!-- Detail Section -->
    <section class="detail section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="card shadow">
              <?php if (!empty($produk['foto'])): ?>
                <img src="uploads/<?= htmlspecialchars($produk['foto']) ?>" class="card-img-top" alt="<?= htmlspecialchars($produk['nama']) ?>" style="max-height: 400px; object-fit: cover;">
              <?php else: ?>
                <img src="logo.png" class="card-img-top" alt="<?= htmlspecialchars($produk['nama']) ?>" style="max-height: 400px; object-fit: cover;">
              <?php endif; ?>
              
              <div class="card-body p-4">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php#team">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                  </ol>
                </nav>
                
                <h1 class="card-title mb-3"><?= htmlspecialchars($produk['nama']) ?></h1>
                <p class="text-muted mb-4">
                  <i class="fas fa-map-marker-alt me-2"></i>
                  <?= htmlspecialchars($produk['lokasi_kantor']) ?>
                </p>
                
                <div class="row mb-4">
                  <div class="col-md-6">
                    <div class="info-item">
                      <h5><i class="fas fa-seedling me-2 text-primary"></i>Luas Pembibitan</h5>
                      <p><?= htmlspecialchars($produk['luas_pembibitan']) ?></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-item">
                      <h5><i class="fas fa-map-marker-alt me-2 text-primary"></i>Lokasi Pembibitan</h5>
                      <p><?= htmlspecialchars($produk['lokasi_pembibitan']) ?></p>
                    </div>
                  </div>
                </div>
                
                <div class="row mb-4">
                  <div class="col-md-6">
                    <div class="info-item">
                      <h5><i class="fas fa-chart-line me-2 text-primary"></i>Kapasitas Produksi</h5>
                      <p><?= strip_tags($produk['kapasitas_produksi']) ?></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-item">
                      <h5><i class="fas fa-clock me-2 text-primary"></i>Pengalaman Menangkar</h5>
                      <p><?= htmlspecialchars($produk['pengalaman_menangkar']) ?></p>
                    </div>
                  </div>
                </div>
                
                <?php if (!empty($produk['nomor_kontak'])): ?>
                <div class="row mb-4">
                  <div class="col-12">
                    <div class="info-item">
                      <h5><i class="fas fa-phone me-2 text-primary"></i>Nomor Kontak</h5>
                      <p><?= htmlspecialchars($produk['nomor_kontak']) ?></p>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
                
                <div class="text-center mt-4">
                  <a href="index.php#team" class="btn btn-primary">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Berita
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-6">
          <div class="footer-content">
            <a href="index.php" class="logo d-flex align-items-center mb-4">
              <img src="logo.png" alt="Logo HPBPKI" style="height:32px; margin-right:10px;">
              <span class="sitename">HPBPKI</span>
            </a>
            <p class="mb-4">HIMPUNAN PRODUSEN BENIH PERKEBUNAN BUAH DAN KEHUTANAN INDONESIA (HPBPKI) berkomitmen untuk memajukan sektor perbenihan nasional melalui kolaborasi, inovasi, dan edukasi.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="footer-contact">
            <h4>Kontak Kami</h4>
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-info">
                <p>Jl. Pencak no 25. Kecamatan Medan Kota, Kota Medan, Provinsi Sumatera Utara 20217</p>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="contact-info">
                <p>082325302436 | 0895384828622</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="copyright">
              <p>© <span>Copyright</span> <strong class="px-1 sitename">HPBPKI</strong> <span>All Rights Reserved</span></p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="footer-bottom-links">
              <a href="#">Kebijakan Privasi</a>
              <a href="#">Syarat & Ketentuan</a>
            </div>
            <div class="credits">
              Website ini dikembangkan untuk HPBPKI.
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="fas fa-chevron-up"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://bootstrapmade.com/content/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://bootstrapmade.com/content/vendors/php-email-form/validate.js"></script>
  <script src="https://bootstrapmade.com/content/vendors/glightbox/js/glightbox.min.js"></script>
  <script src="https://bootstrapmade.com/content/vendors/swiper/swiper-bundle.min.js"></script>
  <script src="https://bootstrapmade.com/content/vendors/purecounter/purecounter_vanilla.js"></script>
  <script src="https://bootstrapmade.com/content/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="https://bootstrapmade.com/content/vendors/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="https://bootstrapmade.com/content/demo/Devin/assets/js/main.js"></script>
</body>
</html> 
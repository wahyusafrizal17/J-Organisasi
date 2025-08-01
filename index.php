<?php
// Koneksi database
$conn = mysqli_connect('localhost', 'root', 'WahyuJR17_', 'organisasi');
if (!$conn) die('Koneksi gagal: ' . mysqli_connect_error());
$produk = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HIMPUNAN PRODUSEN BENIH PERKEBUNAN BUAH DAN KEHUTANAN INDONESIA</title>
  <meta name="description" content="Website resmi HIMPUNAN PRODUSEN BENIH PERKEBUNAN BUAH DAN KEHUTANAN INDONESIA (HPBPKI)">
  <meta name="keywords" content="benih, perkebunan, kehutanan, himpunan, produsen, indonesia, HPBPKI">
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
<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="logo.png" alt="Logo HPBPKI" style="height:40px; margin-right:10px;">
        <!-- <h1 class="sitename" style="font-size:1.1em;">ANGGOTA</h1> -->
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">HOME</a></li>
          <li><a href="#about">PROFIL PERUSAHAAN</a></li>
          <li><a href="#services">BERITA</a></li>
          <!-- <li><a href="#contact">Contact</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none fas fa-bars"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1>HIMPUNAN PRODUSEN BENIH PERKEBUNAN BUAH DAN KEHUTANAN INDONESIA</h1>
              <p>Organisasi yang mewadahi para produsen benih perkebunan buah dan kehutanan di Indonesia untuk meningkatkan kualitas, kolaborasi, dan inovasi dalam bidang perbenihan nasional.</p>
              <div class="hero-actions justify-content-center justify-content-lg-start">
                <a href="#about" class="btn-primary scrollto">Tentang Kami</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="logo.png" class="img-fluid floating" alt="Logo HPBPKI">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content text-center mb-5">
              <h2>PROFIL PERUSAHAAN</h2>
              <p class="lead">Data perusahaan anggota HPBPKI beserta jenis benih dan kapasitas produksi</p>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <!-- UD Rumah Pala -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-primary">UD Rumah Pala, Lampung Selatan</h5>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Bibit pala non sambungan: 200.000-300.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Bibit pala sambung: 5.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Bibit kakao: 100.000-150.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Bibit cengkeh: 100.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Bibit kelapa: 50.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Pinang dan tanaman kehutanan: 120.000 batang</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- CV Agritech Indonesia -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-primary">CV Agritech Indonesia, Makassar</h5>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Pala: 100.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Cengkeh: 100.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Kopi: 200.000 batang</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- CV Ilham Karya Mandiri -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-primary">CV Ilham Karya Mandiri, Kabupaten Garut Jawa Barat</h5>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Kopi Arabika Lini S 795: 215.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Arabika Sigararutang: 345.000 batang</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- CV Zaroha -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-primary">CV Zaroha, Kabupaten Kepulauan Meranti Timur</h5>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Kopi liberika Meranti (Liberoid Meranti 1): 3.000.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Kelapa Dalam: 147.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Sagu: 2.650.000 batang</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- CV Harapan Jaya -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-primary">CV Harapan Jaya, Kabupaten Soppeng Sulawesi Selatan</h5>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Kakao: 500.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Sawit: 250.000 batang</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- PT Citra Nurani Nusantara -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title text-primary">PT Citra Nurani Nusantara, Makassar Sulawesi Selatan</h5>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Kopi arabika: 500.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Kopi Robusta: 500.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Cengkeh: 250.000 batang</li>
                  <li class="mb-2"><i class="fas fa-seedling me-2"></i>Kakao: 750.000 batang</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container section-title">
        <h2>Protal Berita</h2>
        <p>Informasi dan berita terbaru seputar benih perkebunan, kehutanan, dan kegiatan HPBPKI.</p>
      </div>
      <div class="container">
        <div class="row gy-4">
          <?php if (mysqli_num_rows($produk) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($produk)): ?>
              <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                  <?php if (!empty($row['foto'])): ?>
                    <img src="uploads/<?= htmlspecialchars($row['foto']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['nama']) ?>">
                  <?php else: ?>
                    <img src="logo.png" class="card-img-top" alt="<?= htmlspecialchars($row['nama']) ?>">
                  <?php endif; ?>
                  <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($row['nama']) ?></h5>
                    <ul class="list-unstyled mb-2">
                      <li><strong>Lokasi Kantor:</strong> <?= htmlspecialchars($row['lokasi_kantor']) ?></li>
                      <li><strong>Luas Pembibitan:</strong> <?= htmlspecialchars($row['luas_pembibitan']) ?></li>
                      <li><strong>Lokasi Pembibitan:</strong> <span><?= $row['lokasi_pembibitan'] ?></span></li>
                      <li><strong>Kapasitas Produksi:</strong> <span><?= $row['kapasitas_produksi'] ?></span></li>
                      <li><strong>Pengalaman Menangkar:</strong> <?= htmlspecialchars($row['pengalaman_menangkar']) ?></li>
                      <li><strong>Nomor Kontak:</strong> <?= htmlspecialchars($row['nomor_kontak']) ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
            <div class="col-12">
              <div class="alert alert-info text-center">Belum ada produk.</div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section><!-- /Galeri Produk Section -->
  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-6">
          <div class="footer-content">
            <a href="index.html" class="logo d-flex align-items-center mb-4">
              <img src="logo.png" alt="Logo HPBPKI" style="height:32px; margin-right:10px;">
              <span class="sitename">HPBPKI</span>
            </a>
            <p class="mb-4">HIMPUNAN PRODUSEN BENIH PERKEBUNAN BUAH DAN KEHUTANAN INDONESIA (HPBPKI) berkomitmen untuk memajukan sektor perbenihan nasional melalui kolaborasi, inovasi, dan edukasi.</p>
            <div class="newsletter-form">
              <h5>Berlangganan Informasi</h5>
              <form action="#" method="post" class="php-email-form">
                <div class="input-group">
                  <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required="">
                  <button type="submit" class="btn-subscribe">
                    <i class="fas fa-paper-plane"></i>
                  </button>
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Terima kasih telah berlangganan!</div>
              </form>
            </div>
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
              Jl. Pencak no 25. Kecamatan Medan Kota, Kota Medan, Provinsi Sumatera Utara 20217</p>
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
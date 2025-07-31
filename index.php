<?php
// Koneksi database
$conn = mysqli_connect('localhost', 'root', 'WahyuJR17_', 'organisasi');
if (!$conn) die('Koneksi gagal: ' . mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HPBPKI - Himpunan Produsen Benih Perkebunan Buah dan Kehutanan Indonesia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .navbar-brand img { height: 40px; }
    .hero-section { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; }
    .company-card { transition: transform 0.3s; }
    .company-card:hover { transform: translateY(-5px); }
    .contact-section { background-color: #f8f9fa; }
    .logo-section { background-color: #e9ecef; }
  </style>
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="logo.png" alt="Logo HPBPKI" class="me-2">
        <span class="fw-bold">HPBPKI</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profil-perusahaan">PROFIL PERUSAHAAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profil-anggota">PROFIL ANGGOTA</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero-section py-5">
    <div class="container text-center">
      <h1 class="display-4 fw-bold mb-4">HIMPUNAN PRODUSEN BENIH PERKEBUNAN BUAH DAN KEHUTANAN INDONESIA</h1>
      <p class="lead mb-4">Mewadahi para produsen benih perkebunan buah dan kehutanan di Indonesia</p>
      <div class="row justify-content-center">
        <div class="col-md-3">
          <a href="#berita" class="btn btn-light btn-lg w-100 mb-3">BERITA</a>
        </div>
        <div class="col-md-3">
          <a href="#kontak" class="btn btn-outline-light btn-lg w-100 mb-3">KONTAK</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Profil Perusahaan Section -->
  <section id="profil-perusahaan" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">PROFIL PERUSAHAAN</h2>
      <div class="row g-4">
        <!-- UD Rumah Pala -->
        <div class="col-lg-6">
          <div class="card company-card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title text-primary">UD Rumah Pala, Lampung Selatan</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Bibit pala non sambungan: 200.000-300.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Bibit pala sambung: 5.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Bibit kakao: 100.000-150.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Bibit cengkeh: 100.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Bibit kelapa: 50.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Pinang dan tanaman kehutanan: 120.000 batang</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CV Agritech Indonesia -->
        <div class="col-lg-6">
          <div class="card company-card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title text-primary">CV Agritech Indonesia, Makassar</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Pala: 100.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Cengkeh: 100.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Kopi: 200.000 batang</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CV Ilham Karya Mandiri -->
        <div class="col-lg-6">
          <div class="card company-card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title text-primary">CV Ilham Karya Mandiri, Kabupaten Garut Jawa Barat</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Kopi Arabika Lini S 795: 215.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Arabika Sigararutang: 345.000 batang</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CV Zaroha -->
        <div class="col-lg-6">
          <div class="card company-card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title text-primary">CV Zaroha, Kabupaten Kepulauan Meranti Timur</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Kopi liberika Meranti (Liberoid Meranti 1): 3.000.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Kelapa Dalam: 147.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Sagu: 2.650.000 batang</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CV Harapan Jaya -->
        <div class="col-lg-6">
          <div class="card company-card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title text-primary">CV Harapan Jaya, Kabupaten Soppeng Sulawesi Selatan</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Kakao: 500.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Sawit: 250.000 batang</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- PT Citra Nurani Nusantara -->
        <div class="col-lg-6">
          <div class="card company-card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title text-primary">PT Citra Nurani Nusantara, Makassar Sulawesi Selatan</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Kopi arabika: 500.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Kopi Robusta: 500.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Cengkeh: 250.000 batang</li>
                <li class="mb-2"><i class="bi bi-tree me-2"></i>Kakao: 750.000 batang</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Berita Section -->
  <section id="berita" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">BERITA</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">HPBPKI Gelar Pelatihan Sertifikasi Benih</h5>
              <p class="card-text">Pelatihan sertifikasi benih untuk meningkatkan kompetensi produsen benih di seluruh Indonesia.</p>
              <small class="text-muted">12 Juni 2024</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Inovasi Benih Unggul untuk Perkebunan</h5>
              <p class="card-text">Pengembangan benih unggul baru yang meningkatkan produktivitas tanaman buah tropis.</p>
              <small class="text-muted">5 Juni 2024</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Kolaborasi Rehabilitasi Hutan</h5>
              <p class="card-text">Program penanaman pohon di kawasan hutan kritis bersama Kementerian LHK.</p>
              <small class="text-muted">28 Mei 2024</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak Section -->
  <section id="kontak" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">KONTAK</h2>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hubungi Kami</h5>
              <p class="card-text">
                <i class="bi bi-telephone me-2"></i>+62 812-3456-7890<br>
                <i class="bi bi-envelope me-2"></i>info@hpbpki.or.id<br>
                <i class="bi bi-geo-alt me-2"></i>Jl. Contoh Alamat No. 123, Jakarta, Indonesia
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Logo Section -->
  <section class="logo-section py-4">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-2 text-center mb-3">
          <img src="logo.png" alt="Logo 1" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 text-center mb-3">
          <img src="logo.png" alt="Logo 2" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 text-center mb-3">
          <img src="logo.png" alt="Logo 3" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 text-center mb-3">
          <img src="logo.png" alt="Logo 4" class="img-fluid" style="max-height: 60px;">
        </div>
        <div class="col-md-2 text-center mb-3">
          <img src="logo.png" alt="Logo 5" class="img-fluid" style="max-height: 60px;">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p class="mb-0">&copy; 2024 HPBPKI. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
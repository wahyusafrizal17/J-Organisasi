<?php
// Koneksi database
$conn = mysqli_connect('localhost', 'root', 'WahyuJR17_', 'organisasi');
if (!$conn) die('Koneksi gagal: ' . mysqli_connect_error());

// Notifikasi
$notif = '';

// Tambah produk
if (isset($_POST['tambah'])) {
  $nama = $_POST['nama'];
  $lokasi_kantor = $_POST['lokasi_kantor'];
  $luas_pembibitan = $_POST['luas_pembibitan'];
  $lokasi_pembibitan = $_POST['lokasi_pembibitan'];
  $kapasitas_produksi = $_POST['kapasitas_produksi'];
  $pengalaman_menangkar = $_POST['pengalaman_menangkar'];
  $nomor_kontak = $_POST['nomor_kontak'];
  $foto = null;
  if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $allowed = ['jpg','jpeg','png','gif'];
    $ext = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
    if (in_array($ext, $allowed) && $_FILES['foto']['size'] <= 2*1024*1024) {
      $foto = uniqid('foto_').'.'.$ext;
      move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/'.$foto);
    }
  }
  $sql = "INSERT INTO produk (nama, lokasi_kantor, luas_pembibitan, lokasi_pembibitan, kapasitas_produksi, pengalaman_menangkar, nomor_kontak, foto) VALUES ('$nama', '$lokasi_kantor', '$luas_pembibitan', '$lokasi_pembibitan', '$kapasitas_produksi', '$pengalaman_menangkar', '$nomor_kontak', '$foto')";
  mysqli_query($conn, $sql);
  $notif = 'Produk berhasil ditambahkan!';
}

// Hapus produk
if (isset($_GET['hapus'])) {
  $id = intval($_GET['hapus']);
  mysqli_query($conn, "DELETE FROM produk WHERE id=$id");
  $notif = 'Produk berhasil dihapus!';
}

// Edit produk
if (isset($_POST['edit'])) {
  $id = intval($_POST['id']);
  $nama = $_POST['nama'];
  $lokasi_kantor = $_POST['lokasi_kantor'];
  $luas_pembibitan = $_POST['luas_pembibitan'];
  $lokasi_pembibitan = $_POST['lokasi_pembibitan'];
  $kapasitas_produksi = $_POST['kapasitas_produksi'];
  $pengalaman_menangkar = $_POST['pengalaman_menangkar'];
  $nomor_kontak = $_POST['nomor_kontak'];
  $foto_sql = '';
  if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $allowed = ['jpg','jpeg','png','gif'];
    $ext = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
    if (in_array($ext, $allowed) && $_FILES['foto']['size'] <= 2*1024*1024) {
      $foto = uniqid('foto_').'.'.$ext;
      move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/'.$foto);
      $foto_sql = ", foto='$foto'";
    }
  }
  $sql = "UPDATE produk SET nama='$nama', lokasi_kantor='$lokasi_kantor', luas_pembibitan='$luas_pembibitan', lokasi_pembibitan='$lokasi_pembibitan', kapasitas_produksi='$kapasitas_produksi', pengalaman_menangkar='$pengalaman_menangkar', nomor_kontak='$nomor_kontak' $foto_sql WHERE id=$id";
  mysqli_query($conn, $sql);
  $notif = 'Produk berhasil diupdate!';
}

// Ambil data produk
$produk = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");

// Form edit jika ada GET edit
$edit_data = null;
if (isset($_GET['edit'])) {
  $id = intval($_GET['edit']);
  $res = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");
  $edit_data = mysqli_fetch_assoc($res);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>CRUD Produk - Galeri Produk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-4">
    <h2 class="mb-4">Galeri Produk - CRUD</h2>
    <?php if ($notif): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $notif ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
    <div class="card mb-4">
      <div class="card-header bg-primary text-white">
        <?= $edit_data ? 'Edit Produk' : 'Tambah Produk' ?>
      </div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          <?php if ($edit_data): ?>
            <input type="hidden" name="id" value="<?= $edit_data['id'] ?>">
          <?php endif; ?>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Nama Produk</label>
              <input type="text" name="nama" class="form-control" required value="<?= $edit_data ? htmlspecialchars($edit_data['nama']) : '' ?>">
            </div>
            <div class="col-md-6">
              <label class="form-label">Lokasi Kantor</label>
              <input type="text" name="lokasi_kantor" class="form-control" value="<?= $edit_data ? htmlspecialchars($edit_data['lokasi_kantor']) : '' ?>">
            </div>
            <div class="col-md-6">
              <label class="form-label">Luas Pembibitan</label>
              <input type="text" name="luas_pembibitan" class="form-control" value="<?= $edit_data ? htmlspecialchars($edit_data['luas_pembibitan']) : '' ?>">
            </div>
            <div class="col-md-6">
              <label class="form-label">Pengalaman Menangkar</label>
              <input type="text" name="pengalaman_menangkar" class="form-control" value="<?= $edit_data ? htmlspecialchars($edit_data['pengalaman_menangkar']) : '' ?>">
            </div>
            <div class="col-md-6">
              <label class="form-label">Lokasi Pembibitan</label>
              <textarea name="lokasi_pembibitan" class="form-control" id="lokasi_pembibitan"><?= $edit_data ? htmlspecialchars($edit_data['lokasi_pembibitan']) : '' ?></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label">Kapasitas Produksi</label>
              <textarea name="kapasitas_produksi" class="form-control" id="kapasitas_produksi"><?= $edit_data ? htmlspecialchars($edit_data['kapasitas_produksi']) : '' ?></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label">Nomor Kontak</label>
              <input type="text" name="nomor_kontak" class="form-control" value="<?= $edit_data ? htmlspecialchars($edit_data['nomor_kontak']) : '' ?>">
            </div>
            <div class="col-md-6">
              <label class="form-label">Foto Produk (jpg/png, max 2MB)</label>
              <input type="file" name="foto" class="form-control" accept="image/*">
              <?php if ($edit_data && $edit_data['foto']): ?>
                <img src="uploads/<?= htmlspecialchars($edit_data['foto']) ?>" alt="Foto" class="img-thumbnail mt-2" style="max-width:120px;">
              <?php endif; ?>
            </div>
          </div>
          <div class="mt-4">
            <button type="submit" name="<?= $edit_data ? 'edit' : 'tambah' ?>" class="btn btn-success">
              <?= $edit_data ? 'Update' : 'Tambah' ?>
            </button>
            <?php if ($edit_data): ?>
              <a href="produk.php" class="btn btn-secondary ms-2">Batal</a>
            <?php endif; ?>
          </div>
        </form>
      </div>
    </div>
    <div class="card">
      <div class="card-header bg-secondary text-white">Daftar Produk</div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-bordered mb-0">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Lokasi Kantor</th>
                <th>Luas Pembibitan</th>
                <th>Lokasi Pembibitan</th>
                <th>Kapasitas Produksi</th>
                <th>Pengalaman Menangkar</th>
                <th>Nomor Kontak</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; while($row = mysqli_fetch_assoc($produk)): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td><?= htmlspecialchars($row['lokasi_kantor']) ?></td>
                <td><?= htmlspecialchars($row['luas_pembibitan']) ?></td>
                <td><?= $row['lokasi_pembibitan'] ?></td>
                <td><?= $row['kapasitas_produksi'] ?></td>
                <td><?= htmlspecialchars($row['pengalaman_menangkar']) ?></td>
                <td><?= htmlspecialchars($row['nomor_kontak']) ?></td>
                <td>
                  <?php if ($row['foto']): ?>
                    <img src="uploads/<?= htmlspecialchars($row['foto']) ?>" alt="Foto" style="max-width:60px;">
                  <?php endif; ?>
                </td>
                <td>
                  <a href="?edit=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('lokasi_pembibitan');
    CKEDITOR.replace('kapasitas_produksi');
  </script>
</body>
</html> 
CREATE TABLE produk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(255) NOT NULL,
  lokasi_kantor VARCHAR(255),
  luas_pembibitan VARCHAR(100),
  lokasi_pembibitan TEXT,
  kapasitas_produksi TEXT,
  pengalaman_menangkar VARCHAR(100),
  nomor_kontak VARCHAR(100),
  foto VARCHAR(255)
); 
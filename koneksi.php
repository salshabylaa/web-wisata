<?php
  // Konfigurasi koneksi ke database MySQL
  $host="localhost"; // Nama host, biasanya 'localhost' jika berjalan di server lokal
  $user="root"; // Nama pengguna MySQL, default 'root' untuk server lokal
  $pass=""; // Kata sandi MySQL, kosongkan jika tidak ada kata sandi
  $db="proyek1_db"; // Nama database yang akan digunakan

  // Membuat koneksi ke MySQL
  $koneksi = mysqli_connect($host, $user, $pass, $db);

  // Cek apakah koneksi berhasil
  if (!$koneksi) {
    // Jika koneksi gagal, tampilkan pesan error dan hentikan eksekusi script
    die("Koneksi database gagal: " . mysqli_connect_error());
  } else {
    // Jika koneksi berhasil, tampilkan pesan sukses
    echo "koneksi berhasil";
  }
?>

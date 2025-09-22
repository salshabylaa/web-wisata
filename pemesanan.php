<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Menentukan karakter encoding yang digunakan, yaitu UTF-8 -->
    <meta charset="UTF-8">
    <!-- Menyatakan bahwa dokumen ini dioptimalkan untuk perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <title>Form Pemesanan</title>
    <!-- Menyertakan file CSS dari Bootstrap melalui CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menyertakan file CSS eksternal untuk styling tambahan -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/styles.css">
    <!-- Bagian style untuk menambahkan CSS kustom -->
    <style>
        /* Mengatur background image dan posisi background di bagian header */
        .header {
            background-image: url('gambar/labuanbajo.jpg');
            background-size: cover; /* Mengatur ukuran gambar agar menutupi elemen */
            background-position: center; /* Mengatur posisi gambar di tengah */
        }
    </style>
</head>
<body>

<!-- Header dengan teks yang dipusatkan dan teks berwarna putih -->
<div class="header bg-image text-center text-white py-5">
    <h1>Traveler Timur</h1> <!-- Judul besar -->
    <h6 class="text-light">Traveling Mengasyikkan di Nusa Tenggara Timur</h6> <!-- Subjudul kecil -->
</div>

<!-- Navbar (menu navigasi) menggunakan Bootstrap -->
<nav class="navbar navbar-expand-lg" style="background-color: steelblue;">
    <div class="container-fluid">
        <div class="navbar-nav mx-auto">
            <!-- Tautan navigasi -->
            <a class="nav-link" href="index.php">Beranda</a>
            <a class="nav-link" href="pilihanpaket.php" style="background-color: midnightblue;">Pilihan Paket</a>
            <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
        </div>
    </div>
</nav>

<!-- Form Pemesanan -->
<div class="container mt-4">
    <h3 class="fw-bold">Form Pemesanan</h3> <!-- Judul form -->

    <!-- Form untuk pengisian data pemesanan -->
    <form action="invoice.php" method="POST">
        <div class="mb-3">
            <!-- Input untuk nama lengkap -->
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
        </div>
        <div class="mb-3">
            <!-- Input untuk email -->
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email" placeholder="Masukkan Email" required>
        </div>
        <div class="mb-3">
            <!-- Input untuk nomor telepon -->
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan Nomor Telepon" required>
        </div>
        <div class="mb-3">
            <!-- Dropdown untuk memilih paket wisata -->
            <label for="package" class="form-label">Pilih Barang :</label>
            <select class="form-select" id="package" required name="paket">
                <option value="Labuan Bajo Package">Seragam Putih Biru - Rp 149.000,-</option>
                <option value="Pink Beach Package">Seragam Putih Abu - Rp 149.000,-</option>
                <option value="Pulau Komodo Package">Seragam Olahraga - Rp 149.000,-</option>
                <option value="Wae Rebo Package">Buku Bigboss - Rp 25.000,-</option>
                <option value="Combo Package">Pulpen Joyko - Rp 4.000,-</option>
                <option value="Multi Package">Seragam Batik - Rp 2.100.000,-</option>
            </select>
        </div>
        <div class="mb-3">
            <!-- Input untuk memilih tanggal keberangkatan -->
            <label for="date" class="form-label">Tanggal Pick Up Barang</label>
            <input type="date" class="form-control" id="date" name="tanggal" required>
        </div>
        <!-- Tombol untuk mengirimkan form -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <br><br><br>
    </form>
</div>

<!-- Footer -->
<footer class="text-center py-3" style="background-color: steelblue; color: white;">
    <p>Traveler Timur &copy; 2024</p> <!-- Teks hak cipta -->
</footer>

<!-- Link ke Bootstrap JS dan Popper.js untuk fungsi interaktif -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>

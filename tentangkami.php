<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Menentukan karakter encoding yang digunakan, yaitu UTF-8 -->
    <meta charset="UTF-8">
    <!-- Menyatakan bahwa dokumen ini dioptimalkan untuk perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <title>Tentang Kami</title>
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

<!-- Header dengan gambar background dan teks -->
<div class="header bg-image text-center text-white py-5">
    <h1>Traveler Timur</h1> <!-- Nama website atau perusahaan -->
    <h6 class="text-light">Traveling Mengasyikkan di Nusa Tenggara Timur</h6> <!-- Deskripsi singkat -->
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: steelblue;"> <!-- Navbar dengan warna latar biru -->
    <div class="container-fluid"> <!-- Membuat kontainer yang bersifat fluid agar menyesuaikan lebar layar -->
        <div class="navbar-nav mx-auto"> <!-- Mengatur navigasi ke tengah -->
            <a class="nav-link" href="index.php">Beranda</a> <!-- Link ke halaman beranda -->
            <a class="nav-link" href="pilihanpaket.php">Pilihan Paket</a> <!-- Link ke halaman pilihan paket -->
            <a class="nav-link" href="tentangkami.php" style="background-color: midnightblue;">Tentang Kami</a> <!-- Link ke halaman tentang kami dengan warna latar khusus -->
            <a class="nav-link" href="kontak.php">Kontak</a> <!-- Link ke halaman kontak -->
        </div>
    </div>
</nav>

<!-- Seksi Tentang Kami -->
<div class="container my-5"> <!-- Kontainer untuk konten dengan margin vertikal -->
<h2 class="text-center mb-4">Tentang Kami</h2> <!-- Judul seksi tentang kami -->
    <div class="row mt-5">
        <!-- Kolom untuk Misi -->
        <div class="col-md-4 text-center">
            <h4>Misi Kami</h4> <!-- Judul kolom -->
            <p>Penyedia layanan koperasi yang memenuhi kebutuhan pelanggan dan mewujudkan kepercayaan, kenyamanan, keamanan pelanggan.</p>
        </div>
        <!-- Kolom untuk Visi -->
        <div class="col-md-4 text-center">
            <h4>Visi Kami</h4> <!-- Judul kolom -->
            <p>Menjadi penyedia layanan yang selalu mengutamakan pelanggan agar selalu menjadi pilihan yang tepat saat dibutuhkan.</p>
        </div>
        <!-- Kolom untuk Nilai-nilai -->
        <div class="col-md-4 text-center">
            <h4>Nilai Kami</h4> <!-- Judul kolom -->
            <p>Kami telah menjadi yang terbaik selama 5 tahun berdiri. Kenyamanan anda adalah prioritas kami.</p>
        </div>
    </div>

        <!-- Menjadikan teks berada di tengah -->
    <div class="text-center my-4">
        <!-- Menampilkan gambar Desa Wae Rebo dengan styling responsive -->
        <img src="gambar/fata8.jpg" class="img-fluid" alt="Gambar Wisata" style="max-width: 35%; height: auto;">
    </div>
    <p class="text-center">
        <!-- Paragraf penjelasan tentang perusahaan -->
        Penyediaan Kebutuhan Sekolah
        Koperasi sekolah biasanya menyediakan berbagai kebutuhan siswa seperti alat tulis, buku,
        seragam, dan perlengkapan lainnya. Ini memudahkan siswa mendapatkan barang-barang yang
        dibutuhkan dengan harga yang lebih terjangkau dan mudah diakses.

        Pendidikan Kewirausahaan
        Koperasi di sekolah juga bertujuan untuk mendidik siswa dalam hal kewirausahaan dan
        manajemen. Siswa yang terlibat dalam koperasi dapat belajar mengenai tata kelola keuangan,
        perencanaan bisnis, pengelolaan stok, hingga pelayanan kepada pelanggan.

        Kesejahteraan Anggota
        Koperasi sekolah berusaha untuk meningkatkan kesejahteraan anggota yang terdiri dari siswa,
        guru, dan staf sekolah. Keuntungan dari koperasi biasanya digunakan untuk meningkatkan
        fasilitas sekolah, memberikan beasiswa, atau kegiatan sosial lainnya yang mendukung siswa dan
        komunitas sekolah.
    </p>
</div>

<!-- Footer -->
<footer class="text-center py-3" style="background-color: steelblue; color: white;"> <!-- Footer dengan latar biru dan teks putih -->
    <p>Traveler Timur &copy; 2024</p> <!-- Hak cipta -->
</footer>

<!-- Link ke Bootstrap JS dan Popper.js untuk interaktivitas -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>

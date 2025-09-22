<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Menentukan karakter encoding yang digunakan, yaitu UTF-8 -->
    <meta charset="UTF-8">
    <!-- Menyatakan bahwa dokumen ini dioptimalkan untuk perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <title>Pilihan Paket</title>
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

<!-- Bagian header dengan gambar latar belakang, teks tengah, dan warna teks putih -->
<div class="header bg-image text-center text-white py-5">
    <h1>Traveler Timur</h1>
    <h6 class="text-light">Traveling Mengasyikkan di Nusa Tenggara Timur</h6>
</div>

<!-- Bagian Navbar dengan menu navigasi -->
<nav class="navbar navbar-expand-lg" style="background-color: steelblue;">
    <div class="container-fluid">
        <!-- Bagian menu navbar yang terletak di tengah -->
        <div class="pp navbar-nav mx-auto">
            <!-- Setiap link pada navbar mengarah ke halaman yang berbeda -->
            <a class="nav-link" href="index.php">Beranda</a>
            <a class="nav-link" href="pilihanpaket.php" style="background-color: midnightblue;">Pilihan Paket</a>
            <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
        </div>
    </div>
</nav>

<!-- Bagian konten utama untuk menampilkan pilihan paket wisata -->
<div class="container mt-4">
    <h5 class="fw-bold">Pilih Paket yang Kamu Inginkan!</h5><br>

    <div class="row">
        <!-- Setiap bagian div dalam row ini merepresentasikan satu paket wisata -->

        <!-- Paket 1: Labuan Bajo Package -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <!-- Gambar utama dari paket wisata -->
                <img src="gambar/pulpen.jpg" class="card-img-top" alt="Paket Wisata A">
                <div class="card-body">
                    <!-- Judul dan deskripsi singkat tentang paket wisata -->
                    <h5 class="card-title">Pulpen</h5>
                    <p class="card-text">Pulpen Joyko dengan tinta hitam
                    dan ujung yang tumpul.</p>
                    <!-- Tombol untuk menampilkan lebih banyak detail -->
                    <button class="btn btn-primary" onclick="showDetails('details-paket1')">Lihat Selengkapnya</button>
                    <!-- Detail paket yang disembunyikan secara default dan akan ditampilkan ketika tombol ditekan -->
                    <div id="details-paket1" class="details mt-3" style="display: none;">
                        <h6>Harga: Rp 4.000,- /pcs</h6>
                        <button class="btn btn-primary" onclick="window.location.href='login.php'">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paket 2: Pink Beach Package -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <!-- Gambar utama dari paket wisata -->
                <img src="gambar/buku.jpg" class="card-img-top" alt="Pink Beach Package">
                <div class="card-body">
                    <!-- Judul dan deskripsi singkat tentang paket wisata -->
                    <h5 class="card-title">Buku Tulis Campus</h5>
                    <p class="card-text">Buku tulis campus isi 6/pack. Isi 1 pack 
                    48 lembar.</p>
                    <!-- Tombol untuk menampilkan lebih banyak detail -->
                    <button class="btn btn-primary" onclick="showDetails('details-paket2')">Lihat Selengkapnya</button>
                    <!-- Detail paket yang disembunyikan secara default dan akan ditampilkan ketika tombol ditekan -->
                    <div id="details-paket2" class="details mt-3" style="display: none;">
                        <h6>Harga: Rp 799.000,-</h6>
                        <p><strong>Fasilitas:</strong> Penginapan 1 malam (include makan), Transportasi, Pemandu wisata profesional.</p>
                        <p><strong>Link YouTube:</strong> <a href="https://youtu.be/K7WhvIlu1U4?si=0B2jYIJfUSX8wZEV" target="_blank">Tonton Video</a></p>
                        <button class="btn btn-primary" onclick="window.location.href='login.php'">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paket 3: Pulau Komodo Package -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <!-- Gambar utama dari paket wisata -->
                <img src="gambar/olahraga.jpg" class="card-img-top" alt="Pulau Komodo Package">
                <div class="card-body">
                    <!-- Judul dan deskripsi singkat tentang paket wisata -->
                    <h5 class="card-title">Baju Olahraga</h5>
                    <p class="card-text">Seragam Olahraga khusus untuk
                    SMP Fatahillah</p>
                    <!-- Tombol untuk menampilkan lebih banyak detail -->
                    <button class="btn btn-primary" onclick="showDetails('details-paket3')">Lihat Selengkapnya</button>
                    <!-- Detail paket yang disembunyikan secara default dan akan ditampilkan ketika tombol ditekan -->
                    <div id="details-paket3" class="details mt-3" style="display: none;">
                        <h6>Harga: Rp 149.000,-</h6>
                        <button class="btn btn-primary" onclick="window.location.href='login.php'">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paket 4: Wae Rebo Package -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <!-- Gambar utama dari paket wisata -->
                <img src="gambar/fata11.jpg" class="card-img-top" alt="Wae Rebo Package">
                <div class="card-body">
                    <!-- Judul dan deskripsi singkat tentang paket wisata -->
                    <h5 class="card-title">Seragam Pramuka</h5>
                    <p class="card-text">Berada di ketinggian sekitar 1.200 mdpl, dikelilingi oleh perbukitan hijau yang indah.</p>
                    <!-- Tombol untuk menampilkan lebih banyak detail -->
                    <button class="btn btn-primary" onclick="showDetails('details-paket4')">Lihat Selengkapnya</button>
                    <!-- Detail paket yang disembunyikan secara default dan akan ditampilkan ketika tombol ditekan -->
                    <div id="details-paket4" class="details mt-3" style="display: none;">
                        <h6>Harga: Rp 1.299.000,-</h6>
                        <p><strong>Fasilitas:</strong> Penginapan 2 malam(Include Makanan Khas Wae Rebo), Kain Tenun khas NTT, Transportasi, Pemandu wisata.</p>
                        <p><strong>Link YouTube:</strong> <a href="https://youtu.be/7XRHZ4g9z3A?si=tLq21rOmMRA1-i16" target="_blank">Tonton Video</a></p>
                        <button class="btn btn-primary" onclick="window.location.href='login.php'">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paket 5: Combo Package -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <!-- Gambar utama dari paket wisata -->
                <img src="gambar/batik.jpg" class="card-img-top" alt="Combo Package">
                <div class="card-body">
                    <!-- Judul dan deskripsi singkat tentang paket wisata -->
                    <h5 class="card-title">Seragam batik</h5>
                    <p class="card-text">Mengukir kenangan manis dengan berwisata di dua tempat yang memorable.</p>
                    <!-- Tombol untuk menampilkan lebih banyak detail -->
                    <button class="btn btn-primary" onclick="showDetails('details-paket5')">Lihat Selengkapnya</button>
                    <!-- Detail paket yang disembunyikan secara default dan akan ditampilkan ketika tombol ditekan -->
                    <div id="details-paket5" class="details mt-3" style="display: none;">
                        <h6>Harga: Rp 1.399.000,-</h6>
                        <button class="btn btn-primary" onclick="window.location.href='login.php'">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paket 6: Multi Package -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card">
                <!-- Gambar utama dari paket wisata -->
                <img src="gambar/biru.jpg" class="card-img-top" alt="Multi Package">
                <div class="card-body">
                    <!-- Judul dan deskripsi singkat tentang paket wisata -->
                    <h5 class="card-title">Seragam Putih Biru</h5>
                    <p class="card-text">Jelajahi beberapa destinasi wisata sekaligus untuk pengalaman terbaik anda.</p>
                    <!-- Tombol untuk menampilkan lebih banyak detail -->
                    <button class="btn btn-primary" onclick="showDetails('details-paket6')">Lihat Selengkapnya</button>
                    <!-- Detail paket yang disembunyikan secara default dan akan ditampilkan ketika tombol ditekan -->
                    <div id="details-paket6" class="details mt-3" style="display: none;">
                        <h6>Harga: Rp 2.100.000,-</h6>
                        <p><strong>Fasilitas:</strong> Penginapan 3 malam(Include Makan), Transportasi, Pemandu wisata.</p>
                        <p><strong>Link YouTube:</strong> <a href="https://youtu.be/l0O6mcI-WMk?si=Mzb2-c844fesFeUG" target="_blank">Tonton Video</a></p>
                        <button class="btn btn-primary" onclick="window.location.href='login.php'">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer situs dengan informasi hak cipta -->
<footer class="text-center py-3" style="background-color: steelblue; color: white;">
    <p>Traveler Timur &copy; 2024</p>
</footer>

<!-- Link ke Bootstrap JS dan Popper.js untuk fungsionalitas tambahan -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- JavaScript untuk interaktivitas tombol 'Lihat Selengkapnya' -->
<script>
    function showDetails(id) {
        var element = document.getElementById(id);
        // Logika untuk menampilkan atau menyembunyikan detail paket wisata
        if (element.style.display === "none") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }
</script>

</body>
</html>

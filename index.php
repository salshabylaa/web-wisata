<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Menentukan karakter encoding yang digunakan, yaitu UTF-8 -->
    <meta charset="UTF-8">
    <!-- Menyatakan bahwa dokumen ini dioptimalkan untuk perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <title>Beranda</title>
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

<!-- Header -->
<div class="header text-center text-white py-5">
    <!-- Judul utama situs -->
    <h1>Traveler Timur</h1>
    <!-- Subjudul yang memberikan deskripsi singkat tentang konten situs -->
    <h6 class="text-light">Traveling Mengasyikkan di Nusa Tenggara Timur</h6>
</div>

<!-- Navbar -->
<!-- Navigasi utama situs menggunakan Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: steelblue;">
    <div class="container-fluid">
        <!-- Menu navigasi di tengah menggunakan kelas Bootstrap mx-auto -->
        <div class="navbar-nav mx-auto">
            <!-- Link navigasi menuju halaman Beranda -->
            <a class="nav-link" href="index.php">Beranda</a>
            <!-- Link navigasi menuju halaman Pilihan Paket -->
            <a class="nav-link" href="pilihanpaket.php">Pilihan Paket</a>
            <!-- Link navigasi menuju halaman Tentang Kami -->
            <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
            <!-- Link navigasi menuju halaman Kontak -->
            <a class="nav-link" href="kontak.php">Kontak</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <!-- Judul konten utama halaman Tentang Kami -->
    <h3 class="fw-bold">Surga di Ujung Timur dengan 
        <br>Sejuta Pesona Keindahan Alam</h3>

    <!-- Paragraf pengantar yang memberikan informasi tentang Nusa Tenggara Timur -->
    <p class="lead">Nusa Tenggara Timur(NTT) merupakan sebuah daerah yang terletak di bagian Timur Indonesia memiliki banyak sekali
        keindahan alam. Seringkali dijuluki sebagai "Surga di Ujung Timur". Mungkin anda pernah mendengar beberapa
        destinasi wisata yang populer di NTT diantaranya Labuan Bajo, Pulau Komodo, Desa Wae Rebo dan masih banyak lagi. 
        Omong-omong soal Desa Wae Rebo menandakan NTT bukan hanya kaya oleh Keindahan Alamnya saja namun juga
        banyak tradisi khas dan kearifan lokal turun temurun yang masih melekat di NTT salah satunya adalah Desa Wae Rebo.
    </p>

    <!-- Menjadikan teks berada di tengah -->
    <div class="text-center my-4">
        <!-- Menampilkan gambar Desa Wae Rebo dengan styling responsive -->
        <img src="gambar/waerebo.jpg" class="img-fluid" alt="Gambar Wisata" style="max-width: 35%; height: auto;">
    </div>

    <!-- Paragraf tambahan tentang keunikan NTT dalam hal alam, budaya, dan kuliner -->
    <p class="lead">Tidak hanya kaya akan kekayaan alam dan kearifan lokalnya saja, namun Nusa Tenggara Timur(NTT)
        juga memiliki ragam kuliner yang khas dan unik, alat musik dan baju daerahnya yang khas juga menjadi daya
        tarik wisatawan untuk berkunjung ke pulau timur ini. Terlebih lagi di NTt terdapat satu hewan khas yang hanya bisa 
        kita temui di NTT hewan apakah itu? Ya, benar komodo adalah hewan yang hanya akan kita temui di NTT. 
    </p>

    <!-- Subjudul tentang alat musik tradisional NTT -->
    <h3 class="fw-bold">Alat Musik daerah
        <br>Nusa Tenggara Timur
    </h3>

    <!-- Paragraf yang menjelaskan alat musik tradisional NTT, yaitu Sasando -->
    <p class="lead">Kearifan lokal NTT masih terus dibudayakan dan masih banyak lagi. Salah satunya adalah alat Musik.
        Sasando merupakan alat musik daerah NTT. Sasando, alat musik dawai dari Pulau Rote dimainkan dengan cara dipetik 
        menggunakan kedua tangan dari arah yang berlawanan: 
    </p>

    <!-- Gambar Sasando sebagai alat musik tradisional NTT -->
    <div class="text-center my-4">
        <!-- Menampilkan gambar Sasando dengan styling responsive -->
        <img src="gambar/sasando.jpg" class="img-fluid" alt="Gambar Wisata" style="max-width: 35%; height: auto;">
    </div>

    <!-- Paragraf tambahan tentang fungsi dan penggunaan Sasando dalam budaya NTT -->
    <p class="lead">Sasando adalah alat musik tradisional berdawai yang berasal dari Pulau Rote, Nusa Tenggara Timur, Indonesia. 
        Sasando dimainkan dengan cara dipetik menggunakan jari-jari tangan dan menghasilkan suara yang khas. Sasando sering digunakan 
        untuk mengiringi nyanyian syair, tarian tradisional, pesta, ritual upacara adat, dan menghibur keluarga yang berduka. 

    </p>

    <!-- Subjudul tentang pakaian adat NTT -->
    <h3 class="fw-bold">Baju adat
        <br>Nusa Tenggara Timur
    </h3>

    <!-- Paragraf yang menjelaskan tentang pakaian adat tradisional NTT -->
    <p class="lead">Pakaian adat NTT biasanya menggunakan kain tenun. Dikutip dari e-book repositori Kemdikbud bertajuk Adat Istiadat 
        Daerah Nusa Tenggara Timur, bahwa di daerah Lamaholot, NTT pakaian sehari-hari untuk wanita disebut "kwatek". 
        Sedangkan, pakaian sehari-hari NTT untuk pria disebut "kewodu".
    </p>

    <!-- Gambar pakaian adat dari NTT -->
    <div class="text-center my-4">
        <!-- Menampilkan gambar pakaian adat dengan styling responsive -->
        <img src="gambar/bajuadat.jpg" class="img-fluid" alt="Gambar Wisata" style="max-width: 35%; height: auto;">
    </div>

    <!-- Paragraf tambahan tentang ciri khas pakaian adat dan penggunaannya -->
    <p class="lead">Ciri khas dari Nusa Tenggara Timur antara lain juga dari Baju Adat yang khas dari setiap sukunya.
        Biasanya, baju adat tersebut menggunakan kain hasil tenun masyarakat setempat. Tidak hanya itu ada juga aksen-aksen
        familiar yang biasanya digunakan. Contohnya Topi khusus yang dipakai untuk pria.
    </p>

    <!-- Placeholder tetap untuk referensi atau elemen lain yang mungkin akan ditambahkan nanti -->
    <div class="placeholder bg-secondary my-2"></div>
    <div class="placeholder bg-secondary my-2"></div>
    <div class="placeholder bg-secondary my-2"></div>
    <div class="placeholder bg-secondary my-2"></div>
</div>

<!-- Footer -->
<!-- Bagian footer dengan styling yang serasi dengan navbar -->
<footer class="text-center py-3" style="background-color: steelblue; color: white;">
    <!-- Copyright atau informasi hak cipta -->
    <p>Traveler Timur &copy; 2024</p>
</footer>

<!-- Link ke Bootstrap JS dan Popper.js -->
<!-- Menghubungkan file JS Bootstrap dan Popper.js dari CDN untuk fungsionalitas interaktif -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

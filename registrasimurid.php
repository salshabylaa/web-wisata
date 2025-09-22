<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Menentukan karakter encoding yang digunakan, yaitu UTF-8 -->
    <meta charset="UTF-8">
    <!-- Menyatakan bahwa dokumen ini dioptimalkan untuk perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <title>Home</title>
    <!-- Menyertakan file CSS dari Bootstrap melalui CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menyertakan file CSS eksternal untuk styling tambahan -->
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bagian style untuk menambahkan CSS kustom -->
    <style>
        body{
    background-color: white !important;
}
        /* Mengatur background image dan posisi background di bagian header */
        .header {
            background-image: url('Gambar/kopsmpfata.png');
            background-size: cover; /* Mengatur ukuran gambar agar menutupi elemen */
            background-position: center; /* Mengatur posisi gambar di tengah */
        }
    </style>
</head>
<body>


    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Registrasi Murid</h2>
                <form>
                <form action="process_register.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN :</label>
                        <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Lahir :</label>
                        <input type="date" class="form-control" id="date" name="Tanggal Lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrasi</button>
                </form>
                <div class="text-center mt-3">
                    <p>Sudah Punya Akun? <a href="login.php">Login Disini</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

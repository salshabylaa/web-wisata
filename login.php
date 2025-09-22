<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Menentukan karakter encoding yang digunakan, yaitu UTF-8 -->
    <meta charset="UTF-8">
    <!-- Menyatakan bahwa dokumen ini dioptimalkan untuk perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <title>Login Disini</title>
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
        /* Gaya untuk halaman login */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #000;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #000;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            background-color: #eee;
        }

        input::placeholder {
            color: #999;
        }

        .signup-text {
            margin-top: 15px;
            font-size: 14px;
            color: #333;
        }

        .signup-text a {
            color: #007bff;
            text-decoration: none;
        }
        .signup-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login Dulu Yaa!</h1>
        <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p class="signup-text">
            Belum Punya Akun? <a href="register.php">Buat disini</a>
        </p>
    </div>
    </body>
    </html>
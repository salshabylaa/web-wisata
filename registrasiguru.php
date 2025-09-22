<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Registrasi Guru</h2>
                <form>
                <form action="process_register.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NIP :</label>
                        <input type="text" class="form-control" id="nnip" placeholder="Masukkan NIP">
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

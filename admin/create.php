<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO users (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: steelblue;">
    <div class="container-fluid">
        <div class="navbar-nav mx-auto">
            <a class="nav-link" href="beranda.php">Beranda</a>
            <a class="nav-link" href="pilihanpaket.php">Pilihan Paket</a>
            <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
            <a class="nav-link" href="index.php" style="background-color: darkblue;">Manajemen Pesan</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center mb-4">Tambah Pesan Baru</h2>

    <form action="create.php" method="POST" class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Simpan</button>
    </form>
</div>

<!-- Footer -->
<footer class="text-center py-4 mt-5" style="background-color: steelblue; color: white;">
    <p>&copy; 2024 Perusahaan Wisata. All rights reserved.</p>
</footer>

<!-- Link ke Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>

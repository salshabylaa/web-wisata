<?php include '../koneksi.php'; ?>

<?php
// Memeriksa apakah parameter 'id' ada di URL

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Memeriksa apakah ID tidak kosong
    if (!empty($id)) {
        $sql = "SELECT * FROM orders WHERE id=$id";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            die("Pesan tidak ditemukan.");
        }
    } else {
        die("ID tidak valid.");
    }
} else {
    die("ID tidak ditemukan.");
}

// Memeriksa apakah form dikirim menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Memperbarui data di tabel users
    $sql = "UPDATE users SET name='$name', email='$email', message='$message' WHERE id=$id";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: steelblue;">
    <div class="container-fluid">
        <div class="navbar-nav mx-auto">
            <a class="nav-link" href="index.php">Beranda</a>
            <a class="nav-link" href="pilihanpaket.php">Pilihan Paket</a>
            <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
            <a class="nav-link" href="kontak.php" style="background-color: darkblue;">Kontak</a>
        </div>
    </div>
</nav>

<!-- Tabel Pesan -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Pesan Pengguna</h2>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="3" required><?php echo $row['message']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
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

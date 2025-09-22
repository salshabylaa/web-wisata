<?php include 'wisata.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pesan Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: steelblue;">
    <div class="container-fluid">
        <div class="navbar-nav mx-auto">
            <a class="nav-link" href="beranda.html">Beranda</a>
            <a class="nav-link" href="pilihan-paket.html">Pilihan Paket</a>
            <a class="nav-link" href="tentang-kami.html">Tentang Kami</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
            <a class="nav-link active" href="index.php" style="background-color: darkblue;">Manajemen Pesan</a>
        </div>
    </div>
</nav>

<!-- Tabel Pesan -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Pesan Pengguna</h2>

    <a href="create.php" class="btn btn-primary mb-3">Tambah Pesan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['message'] . "</td>
                            <td>
                                <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus pesan ini?\")'>Hapus</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>Tidak ada pesan.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="text-center py-4 mt-5" style="background-color: steelblue; color: white;">
    <p>&copy; 2024 Perusahaan Wisata. All rights reserved.</p>
</footer>

<!-- Link ke Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>

<?php
// Mulai sesi untuk menyimpan data pengguna jika login berhasil
session_start();

// Koneksi ke database
$host = 'localhost';
$dbname = 'proyek1_db'; 
$username = 'root'; // Sesuaikan dengan username database
$password = ''; // Sesuaikan dengan password database

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Tangkap data login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Validasi login
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $user);
    $stmt->bindParam(':password', $pass);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Login berhasil
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user'] = $userData;
        header('Location: pilihanpaket.php'); // Ganti dengan halaman setelah login
        exit;
    } else {
        // Login gagal
        echo "<script>alert('Username atau Password salah!'); window.location.href='login.php';</script>";
    }
}
?>

<?php
// Koneksi ke database
$host = 'localhost';
$dbname = 'proyek1_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Tangkap data dari form registrasi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $identifier = isset($_POST['nip']) ? $_POST['nip'] : $_POST['nisn'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = isset($_POST['nip']) ? 'guru' : 'murid';

    // Masukkan data ke dalam tabel users
    $stmt = $conn->prepare("INSERT INTO users (name, identifier, email, password, role) VALUES (:name, :identifier, :email, :password, :role)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':identifier', $identifier);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':role', $role);

    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal!'); window.location.href='registerguru.php';</script>";
    }
}
?>

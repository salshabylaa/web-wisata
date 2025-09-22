<?php
include 'koneksi.php'; // Mengimpor file koneksi database

// Ambil data dari form
$data = [
    'nama' => $_POST['nama'], // Mengambil nilai input 'nama' dari form
    'email' => $_POST['email'], // Mengambil nilai input 'email' dari form
    'phone' => $_POST['phone'], // Mengambil nilai input 'phone' dari form
    'paket' => $_POST['paket'], // Mengambil nilai input 'paket' dari form
    'tanggal' => $_POST['tanggal'] // Mengambil nilai input 'tanggal' dari form
];
// Simpan data ke database
$sql = "INSERT INTO orders (nama, email, phone, paket, tanggal) 
        VALUES ('" . $data['nama'] . "', '" . $data['email'] . "', '" . 
        $data['phone'] . "', '" . $data['paket'] . "', '" . $data['tanggal'] . "')";
// Membuat query SQL untuk menyimpan data yang diambil dari form ke tabel 'orders'

if ($koneksi->query($sql) === TRUE) { // Mengeksekusi query dan memeriksa apakah berhasil
    $last_id = $koneksi->insert_id; // Mendapatkan ID dari pemesanan yang baru saja disimpan

    // Redirect ke halaman konfirmasi atau invoice dengan ID pemesanan
    header("Location: invoice.php?id=$last_id");
    exit(); // Menghentikan eksekusi skrip setelah melakukan redirect
} else {
    // Jika terjadi kesalahan dalam eksekusi query, tampilkan pesan error
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close(); // Menutup koneksi ke database
?>

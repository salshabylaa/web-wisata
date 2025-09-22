<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Menentukan karakter encoding yang digunakan, yaitu UTF-8 -->
    <meta charset="UTF-8">
    <!-- Menyatakan bahwa dokumen ini dioptimalkan untuk perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <title>Invoice Pemesanan</title>
    <!-- Menyertakan file CSS dari Bootstrap melalui CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menyertakan file CSS eksternal untuk styling tambahan -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bagian style untuk menambahkan CSS kustom -->
    <style>
        body{
    background-color: white !important;
}
        /* Mengatur background image dan posisi background di bagian header */
        .header {
            background-image: url('gambar/clubmotor.jpg');
            background-size: cover; /* Mengatur ukuran gambar agar menutupi elemen */
            background-position: center; /* Mengatur posisi gambar di tengah */
        }
        .pp{
            background-color:black !important;
        }
    </style>
</head>
<body>

<div class="container mt-4" id="invoice">
    <!-- Judul dan instruksi kepada pengguna -->
    <h5 class="fw-bold">Periksa kembali data diri anda sebelum mengunduh bukti transaksi!</h5>

    <?php
    // Ambil data dari form yang dikirimkan via POST
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $package = $_POST['paket'];

    // Set harga berdasarkan paket yang dipilih
    $price = '';
    if ($package === 'Shoe Package') {
        $price = 'Rp 299.000,-';
    } else if ($package === 'Tumblr Package') {
        $price = 'Rp 99.000,-';
    } else if ($package === 'Sock Package') {
        $price = 'Rp 29.000,-';
    } else if ($package === 'Hat Package') {
        $price = '79.000,-';
    } else if ($package === 'T-Shirt Package') {
        $price = 'Rp 97.000,-';
    } else if ($package === 'Jacket Package') {
        $price = '199.000,-';
    }

    // Tampilkan informasi pemesanan
    echo "<p><strong>Nama:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Nomor Telepon:</strong> $phone</p>";
    echo "<p><strong>Paket Wisata:</strong> $package</p>";
    echo "<p><strong>Total Harga:</strong> $price</p>";
    ?>

    <br>
    <!-- Instruksi untuk melanjutkan pembayaran dan unduh bukti transaksi -->
    <p>Untuk melanjutkan pembayaran, silahkan unduh bukti transaksi anda disini!. <br>
        Setelah pembayaran sudah terkonfirmasi anda akan menerima e-mail paling lambat 1 jam setelah pembayaran sukses.
        <br>(Pembayaran hanya menggunakan Qris)</p> <br>
    <!-- Tombol untuk mengunduh bukti transaksi sebagai PDF -->
    <button id="downloadInvoice" class="btn btn-success">Unduh Bukti Transaksi</button>
    <br><br><br>
    <!-- Canvas untuk QR Code, disembunyikan karena hanya digunakan untuk menggenerate gambar QR -->
    <canvas id="qrisCanvas" style="display: none;"></canvas>
    <br>
</div>

<!-- Link ke Bootstrap JS dan Popper.js dari CDN untuk fungsionalitas interaktif -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- Javascript untuk membuat PDF bukti transaksi dan QR Code untuk membayar -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil data dari PHP yang telah di-echo ke dalam variabel JavaScript
        var name = "<?php echo $name; ?>";
        var email = "<?php echo $email; ?>";
        var phone = "<?php echo $phone; ?>";
        var package = "<?php echo $package; ?>";
        var price = "<?php echo $price; ?>";

        // Generate QRIS Code menggunakan QRious
        var qrisCanvas = document.getElementById('qrisCanvas');
        var qr = new QRious({
            element: qrisCanvas,
            size: 200, // Ukuran QR code dalam piksel
            value: "https://linkpembayaran.com/qris/" + package // URL QRIS pembayaran, disesuaikan
        });

        // Fungsi untuk mengunduh invoice sebagai PDF saat tombol diklik
        document.getElementById('downloadInvoice').addEventListener('click', function() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Set isi dari PDF dengan detail pemesanan
            doc.text("Invoice Pemesanan Paket Wisata", 20, 20);
            doc.text("Nama: " + name, 20, 30);
            doc.text("Email: " + email, 20, 40);
            doc.text("Nomor Telepon: " + phone, 20, 50);
            doc.text("Paket Wisata: " + package, 20, 60);
            doc.text("Total Harga: " + price, 20, 80);

            // Ambil QR code dari canvas dan tambahkan ke PDF
            var imgData = qrisCanvas.toDataURL('image/png'); // Mengkonversi QR code menjadi data gambar
            doc.addImage(imgData, 'PNG', 20, 90, 50, 50); // Tambahkan QR code ke dalam PDF

            // Simpan PDF dengan nama 'invoice.pdf'
            doc.save('invoice.pdf');
        });
    });
</script>

</body>
</html>

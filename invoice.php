<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            background-image: url('gambar/labuanbajo.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
<div class="container mt-4" id="invoice">
    <h5 class="fw-bold">Periksa kembali data diri anda sebelum mengunduh bukti transaksi!</h5>
    <?php
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $package = $_POST['paket'];
    $date = $_POST['tanggal'];
    $price = '';

    switch ($package) {
        case 'Pulpen Joyko': $price = 'Rp 1.099.000,-'; break;
        case 'Buku Tulis Campus': $price = 'Rp 799.000,-'; break;
        case 'Seragam Olahraga': $price = 'Rp 899.000,-'; break;
        case 'Seragam Putih Biru': $price = 'Rp 1.299.000,-'; break;
        case 'Seragam Batik': $price = 'Rp 1.399.000,-'; break;
        case 'Seragam Pramuka': $price = 'Rp 2.100.000,-'; break;
    }

    echo "<p><strong>Nama:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Nomor Telepon:</strong> $phone</p>";
    echo "<p><strong>Pilihan Barang:</strong> $package</p>";
    echo "<p><strong>Tanggal Pick Up Barang:</strong> $date</p>";
    echo "<p><strong>Total Harga:</strong> $price</p>";
    ?>
    <p>Untuk melanjutkan pembayaran, unduh bukti transaksi Anda. Pembayaran hanya melalui QRIS.</p>
    <button id="downloadInvoice" class="btn btn-success">Unduh Bukti Transaksi</button>
    <canvas id="qrisCanvas" style="display: none;"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/qrious/dist/qrious.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var name = "<?php echo $name; ?>";
        var email = "<?php echo $email; ?>";
        var phone = "<?php echo $phone; ?>";
        var package = "<?php echo $package; ?>";
        var date = "<?php echo $date; ?>";
        var price = "<?php echo $price; ?>";

        var qrisCanvas = document.getElementById('qrisCanvas');
        var qr = new QRious({
            element: qrisCanvas,
            size: 200,
            value: "https://linkpembayaran.com/qris/" + package
        });

        document.getElementById('downloadInvoice').addEventListener('click', function() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            var imgData = qrisCanvas.toDataURL('image/png');

            // Header
            doc.setFontSize(18);
            doc.text("Bukti Transaksi Pemesanan", 20, 20);
            doc.setFontSize(12);
            doc.text("Koperasi SMP Fatahillah Lohbener", 20, 30);
            doc.line(20, 35, 190, 35); // Garis horizontal

            // Konten
            doc.text("Nama          : " + name, 20, 45);
            doc.text("Email         : " + email, 20, 55);
            doc.text("Nomor Telepon: " + phone, 20, 65);
            doc.text("Pilihan Barang  : " + package, 20, 75);
            doc.text("Tanggal Pick Up     : " + date, 20, 85);
            doc.text("Total Harga   : " + price, 20, 95);

            // QR Code
            doc.addImage(imgData, 'PNG', 20, 110, 50, 50);

            // Footer
            doc.line(20, 170, 190, 170);
            doc.setFontSize(10);
            doc.text("Terima kasih atas kepercayaan Anda! Hubungi kami untuk informasi lebih lanjut.", 20, 180);

            doc.save('bukti-transaksi.pdf');
        });
    });
</script>
</body>
</html>

<?php
// Cek apakah session sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f0f0f0;
        /* Abu-abu terang untuk latar belakang */
        color: #333;
        /* Warna teks abu-abu gelap */
    }

    .navbar {
        background-color: #5a6268;
        /* Abu-abu gelap untuk navbar */
    }

    .navbar-brand,
    .nav-link {
        color: #fff !important;
        /* Teks putih di navbar */
    }

    .navbar-toggler-icon {
        background-color: #fff;
        /* Warna icon toggler di mobile */
    }

    .nav-link:hover {
        color: #dcdcdc !important;
        /* Abu-abu terang saat hover di navbar */
    }

    /* Custom CSS untuk merapikan tulisan */
    .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
        padding-left: 15px;
    }

    .nav-link {
        font-size: 1.1rem;
        margin-right: 15px;
    }

    .container-fluid {
        padding: 15px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Toko Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_produk_pelanggan.php">Daftar Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="riwayat_transaksi.php">Riwayat Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang.php">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
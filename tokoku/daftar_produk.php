<?php 
session_start();
if($_SESSION['status_login'] != true){
    header('location: login_petugas.php');
    exit();
}
// Koneksi ke database
include "koneksi.php";
// Ambil data produk dari database
$query = "SELECT * FROM toko_produk";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Styling navbar */
    .navbar {
        background-color: #61677A;
    }

    .navbar-brand,
    .nav-link {
        color: #fff !important;
    }

    /* Styling container */
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 20px;
    }

    /* Styling card produk */
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card img {
        height: 250px;
        object-fit: cover;
    }

    /* Styling tombol */
    .btn-primary {
        background-color: #61677A;
        border-color: #61677A;
    }

    .btn-primary:hover {
        background-color: #9BA4B5;
        border-color: #9BA4B5;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn {
        width: 100%;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <?php include "header_petugas.php"; ?>
    <!-- Daftar Produk -->
    <div class="container">
        <h3 class="mt-4">Daftar Produk</h3>
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="foto_produk/<?= $row['foto_produk'] ?>" class="card-img-top"
                        alt="<?= $row['nama_produk'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
                        <p class="card-text"><?= $row['deskripsi'] ?></p>
                        <p class="card-text"><strong>Rp<?= number_format($row['harga'], 0, ',', '.') ?></strong></p>
                        <a href="edit_produk.php?id=<?= $row['id_produk'] ?>" class="btn btn-primary">Edit</a>
                        <a href="hapus_produk.php?id=<?= $row['id_produk'] ?>" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
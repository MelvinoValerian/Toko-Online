<?php 
session_start();
if($_SESSION['status_login'] != true){
    header('location: login_petugas.php');
}
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <?php 
    include "header_petugas.php";
?>
</head>

<style>
.container {
    margin-top: 20px;
    background-color: #61677A;
    /* Warna biru terang untuk background kontainer */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #fff;
    /* Warna biru gelap untuk heading */
}

p.lead {
    color: #fff;
    /* Warna biru sedang untuk teks utama */
}
</style>
<!-- Main Content -->
<div class="container">
    <h2>Selamat Datang <?=$_SESSION['level']?> <?=$_SESSION['nama_petugas']?> di Dashboard Petugas</h2>
    <p class="lead">Kelola data pelanggan dan produk melalui halaman ini.</p>
</div>
<?php
    include "footer_petugas.php";
?>

</html>
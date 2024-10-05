<?php
if($_POST){
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($nama_petugas)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } else {
        include "koneksi.php";
        // Tidak menyertakan kolom 'id' karena akan otomatis diisi oleh AUTO_INCREMENT
        $insert = mysqli_query($conn, "INSERT INTO toko_petugas (nama_petugas, level, username, password) 
        VALUES ('".$nama_petugas."', '".$level."', '".$username."', '".md5($password)."')") 
        or die(mysqli_error($conn));
        
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_petugas.php';</script>";
        }
    }
}
?>
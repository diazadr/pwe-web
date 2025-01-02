<?php 
include '../koneksi.php';

if (isset($_POST['kode_mk'])) {

    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];

    mysqli_query($koneksi, "INSERT INTO matakuliah (kode_mk, nama_mk, sks, semester) VALUES('$kode_mk', '$nama_mk', '$sks', '$semester')");
} else {

    $nama_pengguna = $_POST['nama_pengguna'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($koneksi, "INSERT INTO user (nama_pengguna, alamat, username, password) VALUES('$nama_pengguna', '$alamat', '$username', '$password')");
}

header("location:index.php");
?>

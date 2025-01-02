<?php 
include '../koneksi.php';

$id = $_POST['id'];

if (isset($_POST['kode_mk'])) {

    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];

    mysqli_query($koneksi, "UPDATE matakuliah SET kode_mk='$kode_mk', nama_mk='$nama_mk', sks='$sks', semester='$semester' WHERE id='$id'");
} else {

    $nama_pengguna = $_POST['nama_pengguna'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($koneksi, "UPDATE user SET nama_pengguna='$nama_pengguna', alamat='$alamat', username='$username', password='$password' WHERE id='$id'");
}

header("location:index.php");
?>

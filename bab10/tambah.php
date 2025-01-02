<?php 
include 'koneksi.php';

$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];

mysqli_query($koneksi, "INSERT INTO matakuliah (kode_mk, nama_mk, sks, semester) VALUES('$kode_mk', '$nama_mk', '$sks', '$semester')");

header("location:index.php");
?>

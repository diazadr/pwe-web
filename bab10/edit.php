<?php 
include 'koneksi.php';

$id = $_POST['id'];
$kode_mk = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];

mysqli_query($koneksi, "UPDATE matakuliah SET kode_mk='$kode_mk', nama_mk='$nama_mk', sks='$sks', semester='$semester' WHERE id='$id'");

header("location:index.php");
?>

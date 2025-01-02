<?php 
include '../koneksi.php';

$id = $_GET['id'];

if (isset($_GET['mk'])) {

    mysqli_query($koneksi, "DELETE FROM matakuliah WHERE id='$id'");
} else {

    mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");
}

header("location:index.php");
?>

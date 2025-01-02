<?php
include("koneksi.php");

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
$login = mysqli_query($koneksi, $query);
$baris = mysqli_fetch_array($login);

if ($baris) {

    setcookie("user", $baris['username'], time() + 3600, "/");
    header("location: admin/index.php");
} else {
    header("location: frm_login.php?error=1");
}
?>

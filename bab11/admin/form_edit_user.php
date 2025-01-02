<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Matakuliah</title>
    <link rel="stylesheet" href="../bab11.css"/>
</head>

<body>
    <div class="judul">
        <h1>Edit Data Matakuliah</h1>
    </div>
    <br/>
    <div class="button-atas">
        <a href="index.php" class="atas">KEMBALI</a>
    </div>

    <br/><br/>
    <?php
    include '../koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <div class="form-container">
        <form method="post" action="edit.php">
            <div class="form-group">
                <label for="nama_pengguna">Nama Pengguna</label>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" id="nama_pengguna" name="nama_pengguna" value="<?php echo $d['nama_pengguna']; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" value="<?php echo $d['alamat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo $d['username']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo $d['password']; ?>" required>
            </div>
            <input type="submit" value="SIMPAN">
        </form>
    </div>
    <?php 
    }
    ?>
</body>
</html>

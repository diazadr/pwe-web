<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Matakuliah</title>
    <link rel="stylesheet" href="style.css"/>
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
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <div class="form-container">
        <form method="post" action="edit.php">
            <div class="form-group">
                <label for="kode_mk">Kode MK</label>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" id="kode_mk" name="kode_mk" value="<?php echo $d['kode_mk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_mk">Nama MK</label>
                <input type="text" id="nama_mk" name="nama_mk" value="<?php echo $d['nama_mk']; ?>" required>
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" id="sks" name="sks" value="<?php echo $d['sks']; ?>" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" id="semester" name="semester" value="<?php echo $d['semester']; ?>" required>
            </div>
            <input type="submit" value="SIMPAN">
        </form>
    </div>
    <?php 
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Mata Kuliah</title>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>
  <div class="judul">
    <h1>TAMBAH MATA KULIAH</h1>
  </div>
  <br/>
  <div class="button-atas">
    <a href="index.php" class="atas">KEMBALI</a>
  </div>

  <br/><br/>
  <div class="form-container">
    <form method="post" action="tambah.php">
      <div class="form-group">
        <label for="kode_mk">Kode MK</label>
        <input type="text" id="kode_mk" name="kode_mk" required>
      </div>
      <div class="form-group">
        <label for="nama_mk">Nama MK</label>
        <input type="text" id="nama_mk" name="nama_mk" required>
      </div>
      <div class="form-group">
        <label for="sks">SKS</label>
        <input type="number" id="sks" name="sks" required>
      </div>
      <div class="form-group">
        <label for="semester">Semester</label>
        <input type="number" id="semester" name="semester" required>
      </div>
      <input type="submit" value="SIMPAN">
    </form>
  </div>
</body>

</html>
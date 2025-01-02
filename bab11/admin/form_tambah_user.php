<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Mata Kuliah</title>
  <link rel="stylesheet" href="../bab11.css"/>
</head>

<body>
  <div class="judul">
    <h1>TAMBAH USER</h1>
  </div>
  <br/>
  <div class="button-atas">
    <a href="index.php" class="atas">KEMBALI</a>
  </div>

  <br/><br/>
  <div class="form-container">
    <form method="post" action="tambah.php">
      <div class="form-group">
        <label for="nama_pengguna">Nama Pengguna</label>
        <input type="text" id="nama_pengguna" name="nama_pengguna" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="SIMPAN">
    </form>
  </div>
</body>

</html>
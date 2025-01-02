<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Isi</title>
    <link rel="stylesheet" href="../bab11.css" />
</head>
<body >
  <br>
  <br>
<table width="100%" height="70%" border="1" bgcolor="blue" cellpadding="2" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Nama Pengguna</th>
        <th>Alamat</th>
      </tr>
      <?php
      include '../koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi, "SELECT * FROM user");
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['nama_pengguna']; ?></td>
          <td><?php echo $d['alamat']; ?></td>
        </tr>
      <?php
      }
      ?>
    </table>
</body>
</html>

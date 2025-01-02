  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
    <link rel="stylesheet" href="style.css"/>
  </head>

  <body>
    <div class="judul">
      <h1>DATA MATAKULIAH</h1>
    </div>
    <br/>
    <div class="button-atas">
      <a href="form_tambah.php" class="atas">+ Tambah Mata Kuliah</a>
    </div>

    <br/><br/>
    <table>
      <tr>
        <th>No</th>
        <th>Kode MK</th>
        <th>Nama MK</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Opsi</th>
      </tr>
      <?php
      include 'koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi, "SELECT * FROM matakuliah");
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['kode_mk']; ?></td>
          <td><?php echo $d['nama_mk']; ?></td>
          <td><?php echo $d['sks']; ?></td>
          <td><?php echo $d['semester']; ?></td>
          <td>
            <a class="edit" href="form_edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
            |
            <a class="hapus" href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">HAPUS</a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </body>

  </html>

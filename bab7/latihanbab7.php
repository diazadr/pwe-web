<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Penjualan Barang</title>
    <link rel="stylesheet" href="global.css" />
  </head>
  <body>
    <div class="judul">
      <h1>FORM PENJUALAN BARANG</h1>
    </div>
    <form method="POST" name="input ">
      <table>
        <tr>
          <td><label for="kodeBarang">Kode Barang</label></td>
          <td>
            <input type="text" name="kodeBarang" size="13" />
          </td>
        </tr>
        <tr>
          <td><label for="namaBarang">Nama Barang</label></td>
          <td>
            <input type="text" name="namaBarang" size="30" />
          </td>
        </tr>
        <tr>
          <td><label for="hargaBarang">Harga Barang</label></td>
          <td>
            <input type="text" name="hargaBarang" size="10" />
          </td>
        </tr>
        <tr>
          <td><label for="jumlahBarang">Jumlah Barang</label></td>
          <td>
            <input type="radio" name="jumlah" value="10" /> 10
            <input type="radio" name="jumlah" value="20" /> 20
            <input type="radio" name="jumlah" value="30" /> 30
            <input type="radio" name="jumlah" value="40" /> 40
          </td>
        </tr>
        <tr>
          <td><label for="metodeBayar">Metode Bayar</label></td>
          <td>
            <select name="metodeBayar">
              <option value="Cash">Cash</option>
              <option value="Kredit">Kredit</option>
            </select>
            <input type="submit" name="proses" value="Proses" />
          </td>
        </tr>
      </table>
    </form>

    <?php
      if (isset($_POST['proses'])) {
        $kodeBarang = $_POST['kodeBarang'];
        $namaBarang = $_POST['namaBarang'];
        $hargaBarang = $_POST['hargaBarang'];
        $jumlahBarang = $_POST['jumlah'];
        $metodeBayar = $_POST['metodeBayar'];
        echo "<div style='text-align: left; margin: 0 auto; width: 513px;'>";
        echo "<label>Kode Barang :</label> <strong>$kodeBarang</strong><br>";
        echo "<label>Nama Barang :</label> <strong>$namaBarang</strong><br>";
        echo "<label>Harga Barang :</label> <strong>$hargaBarang</strong><br>";
        echo "<label>Jumlah Barang :</label> <strong>$jumlahBarang</strong><br>";
        echo "<label>Metode Bayar :</label> <strong>$metodeBayar</strong><br>";
        echo "</div>";
      }
    ?>
  </body>
</html>

<?php include("proses.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Penjualan Barang</title>
  <link rel="stylesheet" href="global.css">
  <script>
    function cetak() {
      window.print();
    }
  </script>
</head>

<body>
  <div class="judul">
    <h1>FORM PENJUALAN BARANG</h1>
  </div>

  <form method="POST" action="">
    <table>
      <tr>
        <td><label for="kodeBarang">Kode Barang</label></td>
        <td>
          <input type="text" name="kodeBarang" id="kodeBarang" size="13" value="<?php echo isset($_POST['kodeBarang']) ? $_POST['kodeBarang'] : ''; ?>" />
          <input type="submit" name="cari" value="Cari" />
        </td>
      </tr>
      <tr>
        <td><label for="namaBarang">Nama Barang</label></td>
        <td>
          <input type="text" name="namaBarang" id="namaBarang" size="30" value="<?php echo isset($namaBarang) ? $namaBarang : ''; ?>" readonly />
        </td>
      </tr>
      <tr>
        <td><label for="hargaBarang">Harga Barang</label></td>
        <td>
          <input type="text" name="hargaBarang" id="hargaBarang" size="10" value="<?php echo isset($hargaBarang) ? $hargaBarang : ''; ?>" readonly />
        </td>
      </tr>
      <tr>
        <td><label for="jumlahBarang">Jumlah Barang</label></td>
        <td>
          <input type="text" name="jumlahBarang" id="jumlahBarang" size="5" value="<?php echo isset($_POST['jumlahBarang']) ? $_POST['jumlahBarang'] : ''; ?>" />
        </td>
      </tr>
      <tr>
        <td><label for="metodeBayar">Metode Bayar</label></td>
        <td>
          <select name="metodeBayar" id="metodeBayar">
            <option value="Cash" <?php if (isset($_POST['metodeBayar']) && $_POST['metodeBayar'] == 'Cash') echo 'selected'; ?>>Cash</option>
            <option value="Kredit" <?php if (isset($_POST['metodeBayar']) && $_POST['metodeBayar'] == 'Kredit') echo 'selected'; ?>>Kredit</option>
          </select>
          <input type="submit" name="hitung" value="Proses" />
        </td>
      </tr>
      <tr>
        <td><label for="totalHarga">Total Harga</label></td>
        <td>
          <input type="text" name="totalHarga" id="totalHarga" size="20" value="<?php echo isset($totalHarga) ? $totalHarga : ''; ?>" readonly />
        </td>
      </tr>
      <tr>
        <td><label for="totalDiskon">Diskon</label></td>
        <td>
          <input type="text" name="totalDiskon" id="totalDiskon" size="20" value="<?php echo isset($diskon) ? $diskon : ''; ?>" readonly />
        </td>
      </tr>
      <tr>
        <td><label for="totalBayar">Total Bayar</label></td>
        <td>
          <input type="text" name="totalBayar" id="totalBayar" size="20" value="<?php echo isset($totalBayar) ? $totalBayar : ''; ?>" readonly />
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="button" value="Cetak" onclick="cetak()" /></td>
      </tr>
    </table>
  </form>


</body>

</html>
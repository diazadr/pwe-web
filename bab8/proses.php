<?php
if (isset($_POST['cari'])) {
    $kodeBarang = $_POST['kodeBarang'];

    switch ($kodeBarang) {
        case "A001":
            $namaBarang = 'Televisi Samsung 50"';
            $hargaBarang = 5000000;
            break;
        case "A002":
            $namaBarang = 'VCD Player Sony';
            $hargaBarang = 750000;
            break;
        case "A003":
            $namaBarang = 'Mini Compo';
            $hargaBarang = 2300000;
            break;
        default:
            $namaBarang = 'Tidak ditemukan';
            $hargaBarang = 0;
    }
}

if (isset($_POST['hitung'])) {
    $namaBarang = isset($_POST['namaBarang']) ? $_POST['namaBarang'] : '';
    $hargaBarang = isset($_POST['hargaBarang']) ? (int)$_POST['hargaBarang'] : 0;
    $jumlahBarang = isset($_POST['jumlahBarang']) ? (int)$_POST['jumlahBarang'] : 0;
    $metodeBayar = isset($_POST['metodeBayar']) ? $_POST['metodeBayar'] : '';

    $totalHarga = $hargaBarang * $jumlahBarang;
    
$diskon = 0;
if ($metodeBayar == "Cash" && $jumlahBarang > 5) {
    $diskon = 0.12 * $totalHarga;
} elseif ($metodeBayar == "Kredit" && $jumlahBarang > 20) {
    $diskon = 0.05 * $totalHarga;
} else {
    $diskon = 0;
}
    $totalBayar = $totalHarga - $diskon;
}
?>

<?php
define("PAJAK", 0.1);
$barang = ["Keyboard" => 150000];
$jumlah_beli = 2;
$total_awal = $barang["Keyboard"] * $jumlah_beli;
$nominal_pajak = $total_awal * PAJAK;
$total_bayar = $total_awal + $nominal_pajak;
echo "<b>Perhitungan Total Pembelian (Dengan Array)</b><br>";
echo "<hr>";
echo "Nama Barang : Keyboard <br>";
echo "Harga Satuan : Rp " . number_format($barang["Keyboard"], 0, ',', '.') . "<br>";
echo "Jumlah Beli : " . $jumlah_beli . "<br>";
echo "<br>";
echo "Total Harga (Sebelum pajak) : Rp " . number_format($total_awal, 0, ',', '.') . "<br>";
echo "Pajak (10%) : Rp " . number_format($nominal_pajak, 0, ',', '.') . "<br>";
echo "<b>Total Bayar : Rp " . number_format($total_bayar, 0, ',', '.') . "</b><br>";
?>
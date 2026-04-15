<?php
define("PAJAK", 0.15);
$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$email = $_POST['email_mhs'];
$jenis = $_POST['jenis_layanan'];
$pilihan_barang = isset($_POST['barang']) ? $_POST['barang'] : [];

$barang = [
    "Buku Tulis" => 5000,
    "Pensil" => 3000,
    "Penghapus" => 2000,
    "Pulpen" => 4000,
    "Koperasi" => 10000
];
$jumlah_beli = 1;
$total_awal = array_sum(array_map(function($item) use ($barang, $jumlah_beli) { return $barang[$item] * $jumlah_beli; }, $pilihan_barang));
$nominal_pajak = $total_awal * PAJAK;
$total_bayar = $total_awal + $nominal_pajak;


//logika if-else
if($jenis == "Reguler"){
    $biaya_layanan = "gratis";
} else {
    $biaya_layanan = "berbayar";
}

//output
echo "Nama Mahasiswa: " . $nama . "<br><br>";
echo "NIM Mahasiswa: " . $nim . "<br><br>";
echo "Email Mahasiswa: " . $email . "<br><br>";
echo "Jenis Layanan: " . $jenis . "<br><br>";
echo "Pilihan Barang: " . implode(", ", $pilihan_barang) . "<br><br>";
echo "Nama Barang: " . implode(", ", $pilihan_barang) . "<br><br>";
echo "Harga Satuan: Rp " . implode(", ", array_map(function($item) use ($barang) { return number_format($barang[$item], 0, ',', '.'); }, $pilihan_barang)) . "<br><br>";
echo "Jumlah Beli: " . implode(", ", array_fill(0, count($pilihan_barang), $jumlah_beli)) . "<br><br>";
echo "Total Harga (Sebelum Pajak): Rp " . implode(", ", array_map(function($item) use ($barang, $jumlah_beli) { return number_format($barang[$item] * $jumlah_beli, 0, ',', '.'); }, $pilihan_barang)) . "<br><br>";
echo "Pajak (15%): Rp " . implode(", ", array_map(function($item) use ($barang, $jumlah_beli) { return number_format(($barang[$item] * $jumlah_beli) * PAJAK, 0, ',', '.'); }, $pilihan_barang)) . "<br><br>";
echo "Total Bayar : Rp " . number_format($total_awal + $nominal_pajak, 0, ',', '.') . "<br><br>";
echo "Biaya Layanan: " . $biaya_layanan . "<br><br>";
?>
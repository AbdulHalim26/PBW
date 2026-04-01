<?php
$npm = "12345xxxx";
$nama = "AL BIN BITCOIN";
$prodi = "SAIN DATA";
$semester = 9;
$biaya_ukt = 5900000;
$persen_diskon = 0;

if ($biaya_ukt >= 5000000 && $semester > 8) {
    $persen_diskon = 15;
} elseif ($biaya_ukt >= 5000000) {
    $persen_diskon = 10;
} else {
    $persen_diskon = 0;
}

$nominal_diskon = ($persen_diskon / 100) * $biaya_ukt;
$total_bayar = $biaya_ukt - $nominal_diskon;


echo "NPM : " . $npm . "<br>";
echo "NAMA : " . $nama . "<br>";
echo "PRODI : " . $prodi . "<br>";
echo "SEMESTER : " . $semester . "<br>";
echo "BIAYA UKT : Rp. " . number_format($biaya_ukt, 0, ',', '.') . ",-<br>";
echo "DISKON : " . $persen_diskon . "% (otomatis ditentukan oleh if)<br>";
echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . ",- (otomatis ditentukan oleh if)<br>";
?>
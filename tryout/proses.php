<?php
echo "<h3>Pesanan Seblak Diterima!</h3>";

$nama = $_POST['nama_pembeli'];
echo "Nama Pembeli: " . $nama . "<br><br>";

// LOGIKA ISSET & ARRAY MULAI DI SINI
// Cara bacanya: "Apakah ada data bernama 'topping' yang dikirim dari form?"
if (isset($_POST['topping'])) {
    
    // Kalau ADA, masukkan lemari laci itu ke dalam variabel $array_topping
    $array_topping = $_POST['topping'];
    
    echo "Topping yang kamu pilih:<br>";
    
    // Bongkar isi array-nya pakai foreach!
    foreach ($array_topping as $satu_topping) {
        echo "- " . $satu_topping . "<br>";
    }

} else {
    
    // Kalau TIDAK ADA (pembeli nggak nyentang satupun)
    echo "Wah, kamu makan seblak kosongan tanpa topping nih.<br>";
    
}
?>
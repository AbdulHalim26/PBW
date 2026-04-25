<?php 
include "menu.php"; 
?>

<form method="POST">
    Input Jumlah Roda: <input type="number" name="roda">
    <button type="submit">Cek Kendaraan</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roda = $_POST['roda'];
    switch ($roda) {
        case 2: echo "Hasil: Sepeda Motor"; break;
        case 4: echo "Hasil: Mobil"; break;
        default: echo "Hasil: Kendaraan tidak dikenal"; break;
    }
}
?>
<?php
 include "menu.php";
?>
<form method="POST">
    Cetak genap sampai angka: <input type="number" name="batas">
    <button type="submit">Cetak</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $batas = $_POST['batas'];
    echo "Bilangan genap: ";
    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . " ";
    }
}
?>
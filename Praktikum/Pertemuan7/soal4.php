<?php
 include "menu.php";
?>
<form method="POST">
    Cek Angka: <input type="number" name="angka">
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];
    echo ($angka % 2 == 0) ? "Hasil: $angka adalah Genap" : "Hasil: $angka adalah Ganjil";
}
?>
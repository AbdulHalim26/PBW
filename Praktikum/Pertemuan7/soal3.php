<?php
 include "menu.php";
?>
<form method="POST">
    Masukkan nama hewan (pisahkan dengan koma): <input type="text" name="hewan_input">
    <button type="submit">Tampilkan Array</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['hewan_input'];
    $daftar_hewan = explode(",", $input); // Mengubah string jadi array
    echo "Daftar Hewan: <br>";
    foreach ($daftar_hewan as $h) {
        echo "- " . trim($h) . "<br>";
    }
}
?>
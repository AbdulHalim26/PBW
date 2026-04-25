<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Form Input Data </h2>
    <form method="POST" action="praktikum.php">
        <label>Nama : </label>
        <input type="text" name="nama"><br><br>

        <label>Umur : </label>
        <input type="number" name="umur"><br><br>

        <label>Alamat : </label>
        <input type="text" name="alamat"><br><br>

        <label>Memiliki KTP : </label><br>
        <input type="radio" name="ktp" value="ya"> Ya
        <input type="radio" name="ktp" value="tidak"> Tidak
        <br><br>

        <button type="submit" name="submit"> Submit </button>
    </form>
    <hr>
    <?php   
    if (isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];
        $ktp = $_POST['ktp'];

        // Validasi umur >= 17 dan memiliki KTP
        if ($umur >= 17 && $ktp == "ya"){
            echo "<h3 style='color: green;'>Data Valid ✓</h3>";
            echo "Nama : ". $nama ."<br>";
            echo "Umur : ". $umur ." tahun <br>";
            echo "Alamat : ". $alamat ."<br>";
            echo "Memiliki KTP : ". $ktp ."<br>";
        } else {
            echo "<h3 style='color: red;'>Data Tidak Valid ✗</h3>";
            if ($umur < 17){
                echo "Umur harus minimal 17 tahun<br>";
            }
            if ($ktp != "ya"){
                echo "Anda harus memiliki KTP<br>";
            }
        }
    }
    ?>
</body>
</html>
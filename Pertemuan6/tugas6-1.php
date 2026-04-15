<!DOCTYPE HTML>
<html>
<head>
    <title> Tugas Predikat Nilai </title>
</head>
<body>
    <h2> Form cek Predikat Nilai </h2>

    <form method="GET" action="tugas5-1.php">
        <label>Nama Mahasiswa : </label>
        <input type="text" name="nama_mhs"><br><br>

        <label> Nilai Ujian : </label>
        <input type="number" name="nilai_ujian"><br><br>

        <button type="submit" name="submit"> Cek Predikat </button>
    </form>

    <hr>
    <?php
    if (isset($_POST['submit'])){
        $nama = $_POST['nama_mhs'];
        $nilai = $_POST['nilai_ujian'];
        $predikat="";
        $status="";

        if($nilai>100 || $nilai<0){
            $predikat = "Tidak Valid";
            $status = "Tidak Valid";
        }
        elseif($nilai>=85){
            $predikat = "A";
            $status = "Lulus";
        }elseif($nilai>=75){
            $predikat = "B";
            $status = "Lulus";
        }elseif($nilai>=65){
            $predikat = "C";
            $status = "Lulus";
        }elseif($nilai>=50){
            $predikat = "D";
            $status = "Tidak Lulus";
        }else{
            $predikat = "E";
            $status = " Tidak Lulus";
        }
        echo "Nama : ". $nama ."<br>";
        echo "Nilai : ". $nilai ."<br>";
        echo "Predikat : ". $predikat ."<br>";    
        echo "Status :". $status ."<br>"; 
    }
    ?>
</body>
</html>
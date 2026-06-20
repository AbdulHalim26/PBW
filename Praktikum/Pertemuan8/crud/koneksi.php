<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "db_buku";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("koneksi ke database gagal: " . mysqli_connect_error());
} else {
    // echo "Koneksi Berhasil";
}

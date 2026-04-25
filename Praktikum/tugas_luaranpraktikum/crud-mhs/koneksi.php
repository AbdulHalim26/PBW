<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "db_tugaspbw";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Aduh, Koneksi Gagal: " . $conn->connect_error);
}

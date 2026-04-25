<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id = ?";
$stmt = mysqli_prepare($koneksi, $query);

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>
            alert('Data buku berhasil dihapus!');
            window.location='index.php';
          </script>";
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}

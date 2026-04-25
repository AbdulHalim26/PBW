<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $judul   = $_POST['Judul'];
    $penulis = $_POST['Penulis'];
    $tahun   = $_POST['Tahun_Terbit'];
    $harga   = $_POST['Harga'];
    $stok    = $_POST['Stok'];

    $query = "INSERT INTO buku (judul, penulis, tahun_terbit, harga, stok) VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($koneksi, $query);

    mysqli_stmt_bind_param($stmt, "ssiii", $judul, $penulis, $tahun, $harga, $stok);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
                alert('Data buku berhasil ditambahkan dengan aman!');
                window.location='index.php';
              </script>";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Data Buku Baru</h2>

        <form action="" method="POST" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="Judul" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="Penulis" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="text" name="Tahun_Terbit" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga (Rp)</label>
                <input type="number" name="Harga" class="form-control" required>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="Stok" class="form-control" required>
                </div>

                <button type="submit" name="submit" class="btn btn-success">Simpan Data</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>
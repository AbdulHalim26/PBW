<?php
session_start();
if (!isset($_SESSION['login_Un5ik4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}

include 'koneksi.php';

$id = $_GET['id'];

$query_select = "SELECT * FROM buku WHERE id = ?";
$stmt_select = mysqli_prepare($koneksi, $query_select);
mysqli_stmt_bind_param($stmt_select, "i", $id);
mysqli_stmt_execute($stmt_select);
$result = mysqli_stmt_get_result($stmt_select);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $judul   = $_POST['Judul'];
    $penulis = $_POST['Penulis'];
    $tahun   = $_POST['Tahun_Terbit'];
    $harga   = $_POST['Harga'];
    $stok    = $_POST['stok'];

    $query_update = "UPDATE buku SET judul = ?, penulis = ?, tahun_terbit = ?, harga = ?, stok = ? WHERE id = ?";
    $stmt_update = mysqli_prepare($koneksi, $query_update);

    mysqli_stmt_bind_param($stmt_update, "ssiiii", $judul, $penulis, $tahun, $harga, $stok, $id);

    if (mysqli_stmt_execute($stmt_update)) {
        echo "<script>
                alert('Data buku berhasil diupdate dengan aman!');
                window.location='index.php';
              </script>";
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Data Buku</h2>

        <form action="" method="POST" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="Judul" class="form-control" value="<?php echo $row['judul']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="Penulis" class="form-control" value="<?php echo $row['penulis']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="number" name="Tahun_Terbit" class="form-control" value="<?php echo $row['tahun_terbit']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga (Rp)</label>
                <input type="number" name="Harga" class="form-control" value="<?php echo $row['harga']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" value="<?php echo $row['stok']; ?>" required>
            </div>

            <button type="submit" name="update" class="btn btn-warning">Update Data</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>
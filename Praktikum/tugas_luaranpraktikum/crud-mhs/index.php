<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Mahasiswa</h2>

        <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Data Mahasiswa</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                // 2. Siapkan perintah SQL untuk mengambil semua data dari tabel mahasiswa
                $sql = "SELECT * FROM mahasiswa ORDER BY id DESC";
                $result = $conn->query($sql);
                $no = 1;

                // 3. Cek apakah ada datanya
                if ($result->num_rows > 0) {
                    // 4. Jika ada, keluarkan satu per satu menggunakan perulangan while
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $row['nim'] . "</td>
                            <td>" . $row['nama'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['jurusan'] . "</td>
                            <td>
                                <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah kamu yakin ingin menghapus data ini?\")'>Hapus</a>
                            </td>
                          </tr>";
                    }
                } else {
                    // Jika tabel masih kosong
                    echo "<tr><td colspan='6' class='text-center'>Belum ada data mahasiswa. Silakan tambah data baru!</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
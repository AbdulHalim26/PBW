<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk cek username dan password di database
    $query = "SELECT id, nama FROM pengguna WHERE nama = ? AND katasandi = ?";
    $stmt = $koneksi->prepare($query);

    if (!$stmt) {
        die("Prepare failed: " . $koneksi->error);
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Login berhasil
        $user = $result->fetch_assoc();

        // Set session variables
        $_SESSION['id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['login_Un5ik4'] = true;

        // Redirect ke index.php
        header("Location: index.php");
        exit;
    } else {
        // Login gagal
        header("Location: login.php?message=" . urlencode("Username atau password salah!"));
        exit;
    }

    $stmt->close();
} else {
    // Jika tidak POST, redirect ke login
    header("Location: login.php");
    exit;
}

$koneksi->close();

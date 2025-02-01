<?php
// Detail koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "katar_08";

// Membuat koneksi
$conn = mysqli_connect($localhost, $root, $"", $katar_08);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Mendapatkan data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mengecek login
$sql = "SELECT * FROM users WHERE username = '$username' AND password = MD5('$password')";
$result = mysqli_query($conn, $sql);

// Mengecek hasil query
if (mysqli_num_rows($result) > 0) {
    echo "Login berhasil! Selamat datang, $username.";
} else {
    echo "Login gagal! Username atau password salah.";
}

// Menutup koneksi
mysqli_close($conn);
?>

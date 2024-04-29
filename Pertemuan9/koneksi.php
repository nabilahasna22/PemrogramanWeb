<?php
// Informasi koneksi ke database
$namaHost = "localhost"; // Nama host database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "prakwebdb"; // Nama database

try {
    // Mencoba membuat koneksi ke database menggunakan mysqli_connect()
    $connect = mysqli_connect($namaHost, $username, $password, $database);
} catch (Exception $e) {
    // Menangani kesalahan jika gagal terhubung ke database
    echo $e->getMessage(); // Menampilkan pesan kesalahan
}
?>

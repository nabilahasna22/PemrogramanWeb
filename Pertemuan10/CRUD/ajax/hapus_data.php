<?php
// Memulai sesi PHP
session_start();

// Mengimpor koneksi ke database
include "./koneksi.php";

// Mengimpor perlindungan CSRF
include "./csrf.php";

// Mendapatkan ID dari data anggota yang akan dihapus
$id = $_POST['id'];

// Menyiapkan query SQL untuk menghapus data anggota berdasarkan ID
$query = "DELETE FROM anggota WHERE id = ?";

// Menyiapkan statement SQL
$sql = $db1->prepare($query);

// Mengikat parameter ID ke statement SQL
$sql->bind_param('i', $id);

// Menjalankan statement SQL
$sql->execute();

// Mengirim respons JSON bahwa penghapusan data sukses
echo json_encode(['success' => 'Sukses']);

// Menutup koneksi database
$db1->close();
?>

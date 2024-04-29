<?php
// Memulai sesi PHP
session_start();

// Mengimpor koneksi ke database
include "koneksi.php";

// Mengimpor perlindungan CSRF
include "csrf.php";

// Mendapatkan ID dari data anggota yang akan diambil informasinya
$id = $_POST['id'];

// Menyiapkan query SQL untuk mengambil data anggota berdasarkan ID
$query = "SELECT * FROM anggota WHERE id = ? ORDER BY id DESC";

// Menyiapkan statement SQL
$sql = $db1->prepare($query);

// Mengikat parameter ID ke statement SQL
$sql->bind_param('i', $id);

// Menjalankan statement SQL
$sql->execute();

// Mendapatkan hasil dari eksekusi query
$res1 = $sql->get_result();

// Membuat array asosiatif untuk menyimpan hasil dari query
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row['id'];
    $h['nama'] = $row['nama'];
    $h['jenis_kelamin'] = $row['jenis_kelamin'];
    $h['alamat'] = $row['alamat'];
    $h['no_telp'] = $row['no_telp'];
}

// Mengkonversi array asosiatif ke format JSON dan mengirimkannya sebagai respons
echo json_encode($h);

// Menutup koneksi database
$db1->close();
?>

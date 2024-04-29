<?php
// Memulai sesi PHP
session_start();

// Mengimpor koneksi ke database
include "koneksi.php";

// Mengimpor perlindungan CSRF
include "csrf.php";

// Mendapatkan data dari formulir dan membersihkannya dari karakter yang tidak diinginkan
$id = $_POST['id'];
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Menentukan apakah akan melakukan penambahan data baru atau memperbarui data yang ada
if ($id == "") {
    // Jika ID kosong, maka akan menambahkan data baru
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param('ssss', $nama, $jenis_kelamin, $alamat, $no_telp);
    $sql->execute();
} else {
    // Jika ID tidak kosong, maka akan memperbarui data yang ada
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param('ssssi', $nama, $jenis_kelamin, $alamat, $no_telp, $id);
    $sql->execute();
}

// Mengirim respons JSON untuk menandakan keberhasilan
echo json_encode(['success' => 'Sukses']);

// Menutup koneksi database
$db1->close();
?>

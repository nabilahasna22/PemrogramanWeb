<?php
// Memeriksa apakah sesi telah dimulai
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Memeriksa apakah sesi level tidak kosong
if (!empty($_SESSION['level'])) {
  // Mengambil file koneksi dan fungsi pesan kilat
  require 'config/koneksi.php';
  require 'fungsi/pesan_kilat.php';
  // Memasukkan bagian header admin
  include 'admin/template/header.php';

  // Memeriksa apakah terdapat parameter page dalam URL
  if (!empty($_GET['page'])) {
    // Memasukkan halaman yang sesuai dengan parameter page
    include 'admin/module/' . $_GET['page'] . '/index.php';
  } else {
    // Jika tidak ada parameter page, masukkan halaman utama
    include 'admin/template/home.php';
  }

  // Memasukkan bagian footer admin
  include 'admin/template/footer.php';
} else {
  // Jika sesi level kosong, redirect ke halaman login
  header("Location: login.php");
}
?>

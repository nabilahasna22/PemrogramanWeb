<?php
    // Memulai sesi PHP
    session_start();
    
    // Menghapus semua data sesi
    session_destroy();

    // Menampilkan pesan bahwa pengguna berhasil logout
    echo "Anda berhasil logout";
?>

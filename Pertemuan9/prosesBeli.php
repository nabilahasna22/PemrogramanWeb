<?php
    // Memeriksa apakah variabel $_POST["beliNovel"] dan $_POST["beliBuku"] sudah diset
    if(isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])){
        // Mengatur cookie untuk menyimpan nilai jumlah novel dan jumlah buku yang dibeli
        setcookie("beliNovel", $_POST["beliNovel"]); // Mengatur cookie untuk jumlah novel yang dibeli
        setcookie("beliBuku", $_POST["beliBuku"]); // Mengatur cookie untuk jumlah buku yang dibeli

        // Mengarahkan pengguna ke halaman keranjangBelanja.php setelah mengatur cookie
        header("location:keranjangBelanja.php");
    }
?>

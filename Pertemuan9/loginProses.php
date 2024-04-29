<?php
    // Memasukkan file koneksi.php yang berisi koneksi ke database
    include "koneksi.php";

    // Mengambil nilai username dan password dari formulir login
    $username = $_POST['username']; 
    $password = md5($_POST['password']); // Mengenkripsi password menggunakan md5

    // Membuat query untuk memeriksa apakah username dan password cocok dengan data yang ada di database
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);

    // Menghitung jumlah baris hasil query
    $cek = mysqli_num_rows($result);

    // Jika jumlah baris hasil query lebih dari 0 (data ditemukan), maka login berhasil
    if($cek) {
        // Tampilkan pesan berhasil login dan tautan menuju halaman home admin
        echo "Anda berhasil login, silakan menuju ";
    ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    } else {
        // Jika tidak ditemukan data yang cocok, tampilkan pesan gagal login dan tautan untuk kembali login
        echo "Anda gagal login. Silakan ";
    ?>
        <a href="loginForm.html">Login kembali</a>
    <?php
        // Tampilkan pesan error jika terjadi kesalahan dalam eksekusi query
        echo mysqli_error($connect);
    }
?>

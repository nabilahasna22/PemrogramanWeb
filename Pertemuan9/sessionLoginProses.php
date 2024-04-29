<?php
    // Memasukkan file koneksi.php yang berisi koneksi ke database
    include "koneksi.php";

    // Mengambil nilai username dan password dari form yang dikirimkan
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Membuat query SQL untuk memeriksa apakah username dan password ada dalam database
    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
    // Menjalankan query SQL
    $result = mysqli_query($connect, $sql);
    // Mendapatkan jumlah baris hasil query
    $cek = (mysqli_num_rows($result));
    
    // Jika jumlah baris hasil query lebih dari 0
    if ($cek > 0) {
        // Memulai sesi PHP
        session_start();
        // Menyimpan username dan status login ke dalam variabel sesi
        $_SESSION["username"] = $username;
        $_SESSION["status"] = 'login';
        ?>
        <!-- Menampilkan pesan bahwa login berhasil dan memberikan link menuju halaman HOME -->
        Anda berhasil Login, silahkan menuju 
        <a href="homeSession.php">Halaman HOME</a> <?php
    } else {
        ?>
        <!-- Menampilkan pesan bahwa login gagal dan memberikan link untuk kembali ke halaman login -->
        Gagal login, silahkan login lagi
        <a href="sessionLoginForm.html">Halaman Login</a> <?php
        // Menampilkan pesan error jika terjadi kesalahan dalam eksekusi query
        echo mysqli_error($connect);
    }
?>

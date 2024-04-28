<?php
    include "koneksi.php";
    $username = $_POST['username']; 
    $password = md5($_POST['password']); 

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($result);

    if($cek) {
        echo "Anda berhasil login, silakan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    } else {
        echo "Anda gagal login. Silakan"; ?>
        <a href="loginForm.html">Login kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>

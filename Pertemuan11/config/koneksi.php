<?php
date_default_timezone_set("Asia/Jakarta");
$koneksi=mysqli_connect("localhost","root","","web_dinamis")

if(mysqli_connect_errno()){
    die("koneksi database gagal: " . mysqli_connect_error());
}
?>
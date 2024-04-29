<?php
// Konstanta untuk koneksi ke database
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1','prakwebdb');

// Membuat koneksi ke database menggunakan mysqli
$db1 = new mysqli(HOST, USER, PASS, DB1);
?>

<?php

//Membuat fungsi perkenalan
function perkenalan($nama, $salam="Annyeonghaseyo"){
    echo $salam.","; //Menampilkan salam
    echo "Perkenalkan, nama saya ".$nama."<br>"; //Menampilkan nama
    echo "Senang berkenalan dengan Anda <br>"; //Menampilkan kesan pesan
}

//Memanggil fungsi yang sudah dibuat dengan dua argumen
perkenalan("Nabila Hasna", "Hi");

echo "<hr>";

$saya = "Bila";
$ucapanSalam = "Selamat pagi";

// Memanggil lagi
perkenalan($saya);

?>
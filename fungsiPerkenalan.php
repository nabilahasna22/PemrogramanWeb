<?php

function perkenalan($nama,$salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//Memanggil fungsi yang sudah dibuat dengan dua argumen
perkenalan("Nabila","Hallo");

echo "<hr>";

$saya = "Hasna";
$ucapanSalam="Selamat Pagi";

//Memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>
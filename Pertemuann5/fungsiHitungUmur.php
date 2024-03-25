<?php

//Membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama,$salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    
    //Memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004, 2024). " tahun</br>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//Memanggil fungsi yang sudah dibuat dengan dua argumen
perkenalan("Nabila");

?>
<?php

// Membuat fungsi untuk menghitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Membuat fungsi untuk memperkenalkan diri dengan salam default "Assalamualaikum"
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", "; // Menampilkan salam
    echo "Perkenalkan, nama saya " . $nama . "<br/>"; // Menampilkan nama
    
    // Memanggil fungsi hitungUmur dan menampilkan umur
    echo "Saya berusia " . hitungUmur(2004, 2024) . " tahun<br/>"; // Menampilkan umur
    echo "Senang berkenalan dengan anda :)<br/>"; // Pesan terakhir
}

// Memanggil fungsi perkenalan dengan parameter nama "Nabila Hasna"
perkenalan("Nabila Hasna");

?>

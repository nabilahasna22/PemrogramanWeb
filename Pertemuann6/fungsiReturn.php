<?php

// Membuat fungsi untuk menghitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Menampilkan umur
echo "Umur saya adalah ". hitungUmur(2004, 2024)."tahun";

?>
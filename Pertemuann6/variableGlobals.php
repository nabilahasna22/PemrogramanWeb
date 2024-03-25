<?php
// definisi variabel global x dan y dulu
$x = 75;
$y = 25;

// membuat fungsi penjumlahan
function addition() {
    // akses variabel global x dan y memakai array global
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

//memanggil fungsi penjumlahan
addition();

//menampilkan hasil dari penjumlahan
echo $z;

?>
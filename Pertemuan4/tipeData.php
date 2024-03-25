<?php
$a = 10; // Mendefinisikan variabel $a dengan nilai 10
$b = 5; // Mendefinisikan variabel $b dengan nilai 5
$c = $a + 5; // Menambahkan nilai 5 ke variabel $a dan disimpan ke variabel $c
$d = $b + (10*5); // Menambahkan hasil perkalian 10 dan 5 ke variabel $b dan disimpan ke variabel $d
$e = $d-$c; // Mengurangkan nilai variabel $c dari variabel $d dan disimpan ke variabel $e

// Menampilkan nilai variabel $a-$e
echo "Variabel a: {$a} <br>"; 
echo "Variabel b: {$b} <br>"; 
echo "Variabel c: {$c} <br>"; 
echo "Variabel d: {$d} <br>"; 
echo "Variabel e: {$e} <br>"; 

var_dump($e); // Menampilkan informasi tipe data dan nilai variabel $e

$nilaiMatematika = 5.1; // Mendefinisikan nilai variabel $nilaiMatematika
$nilaiIPA = 6.7; // Mendefinisikan nilai variabel $nilaiIPA
$nilaiBahasaIndonesia = 9.3; // Mendefinisikan nilai variabel $nilaiBahasaIndonesia

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3; // Menghitung rata-rata nilai

echo "Matematika: {$nilaiMatematika} <br>"; // Menampilkan nilai variabel $nilaiMatematika
echo "IPA: {$nilaiIPA} <br>"; // Menampilkan nilai variabel $nilaiIPA
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>"; // Menampilkan nilai variabel $nilaiBahasaIndonesia
echo "Rata-rata: {$rataRata} <br>"; // Menampilkan rata-rata nilai

$apakahSiswaLulus=true; // Mendefinisikan variabel $apakahSiswaLulus dengan nilai boolean true
$apakahSiswaSudahUjian=false; // Mendefinisikan variabel $apakahSiswaSudahUjian dengan nilai boolean false

var_dump($apakahSiswaLulus); // Menampilkan informasi tipe data dan nilai variabel $apakahSiswaLulus
echo "<br>"; 
var_dump($apakahSiswaSudahUjian); // Menampilkan informasi tipe data dan nilai variabel $apakahSiswaSudahUjian

$namaDepan = "Nabila"; // Mendefinisikan variabel $namaDepan dengan nilai "Nabila"
$namaBelakang = 'Hasna'; // Mendefinisikan variabel $namaBelakang dengan nilai 'Hasna'

$namaLengkap = "{$namaDepan} {$namaBelakang}<br>"; // Menggabungkan variabel $namaDepan dan $namaBelakang
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang ; // Menggabungkan variabel $namaDepan dan $namaBelakang

echo "Nama Depan : {$namaDepan} <br>"; // Menampilkan nilai variabel $namaDepan
echo 'Nama Belakang : ' . $namaBelakang . ' <br> '; // Menampilkan nilai variabel $namaBelakang

echo $namaLengkap; // Menampilkan nama lengkap dengan menggunakan variabel $namaLengkap

$listMahasiswa = ["Wahid Abdullah","Elmo Bachtiar","Lendis Fabri"]; // Mendefinisikan array $listMahasiswa
echo $listMahasiswa[0]; // Menampilkan elemen pertama dari array $listMahasiswa

?>